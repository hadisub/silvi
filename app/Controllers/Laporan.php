<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends BaseController{
	protected $pengajuan_model;
  protected $data;

	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
    $this->data = [
    'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
    //kirim data tabel laporan
    'laporan'           =>  [],
    'pager'             =>   null,
    'halaman_sekarang'  =>  1];
	}
  public function index(){
    $halaman_sekarang = 1;
    if(!isset($_SESSION['logged_in'])){
      return redirect()->to('/');
    }
    else{
      return view('laporan',$this->data);
    }
  }

    public function cari_laporan(){
      //cari halaman berapa di pagination
      $halaman_sekarang = $this->request->getVar('page_tbllaporan') ? $this->request->getVar('page_tbllaporan') : 1;
      //ambil tanggal awal
      $tanggalawal = $this->request->getVar('tanggalawal');
      //ambil tanggal akhir
      $tanggalakhir = $this->request->getVar('tanggalakhir');
      //cek jika tanggal terisi
      if(!empty($tanggalawal) && !empty($tanggalakhir)){
        $laporan = $this->pengajuan_model->cari_laporan($tanggalawal,$tanggalakhir);

          $this->data = [
          'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
          //kirim data tabel laporan
          'laporan'           =>  $laporan->paginate(10,'tbllaporan'),
          'pager'             =>  $laporan->pager,
          'halaman_sekarang'  =>  $halaman_sekarang
          ];
          session()->remove('kosong');
      }
        return view('laporan',$this->data);
    }

    public function ekspor_excel(){
      $tanggalawal = $this->request->getVar('tanggalawal');
      $tanggalakhir = $this->request->getVar('tanggalakhir');
      $spreadsheet = new spreadsheet();
      $spreadsheet->getDefaultStyle()
      ->getFont()
      ->setName('Arial')
      ->setSize(11);

      //style judul
      $spreadsheet->getActiveSheet()
              ->setCellValue('A1', "Rekapitulasi Permintaan Bantuan Video Conference");
         
      $spreadsheet->getActiveSheet()
              ->mergeCells("A1:G1");
         
      $spreadsheet->getActiveSheet()
              ->getStyle('A1')
              ->getFont()
              ->setSize(20);

      $spreadsheet->getActiveSheet()->getStyle('A1')
              ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
      $spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

      $spreadsheet->getActiveSheet()
              ->setCellValue('A3', 'Tanggal '.date("d-m-Y", strtotime($tanggalawal)).' s.d. '.date("d-m-Y", strtotime($tanggalakhir)).'');
         
      $spreadsheet->getActiveSheet()
              ->mergeCells("A3:G3");

      //style header
      $header = [
        'font' => [
          'color' => [
            'rgb' => '000000'
          ],
          'bold'=>true,
          'size'=>11
        ],
        'fill'=>[
          'fillType' =>  \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
          'startColor' => [
            'rgb' => 'D4D4D4'
          ]
        ],
        'alignment'=>[
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER
        ]
       
      ];  

      $spreadsheet->getActiveSheet()
            ->getColumnDimension('A')
            ->setWidth(4);
      $spreadsheet->getActiveSheet()
            ->getColumnDimension('B')
            ->setWidth(21);
      $spreadsheet->getActiveSheet()
            ->getColumnDimension('C')
            ->setWidth(12);
      $spreadsheet->getActiveSheet()
            ->getColumnDimension('D')
            ->setWidth(27);
      $spreadsheet->getActiveSheet()
            ->getColumnDimension('E')
            ->setWidth(32);
      $spreadsheet->getActiveSheet()
      ->getColumnDimension('F')
      ->setWidth(20);
      $spreadsheet->getActiveSheet()
      ->getColumnDimension('G')
      ->setWidth(34);

      $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A4', 'No.')
                ->setCellValue('B4', 'No. Surat')
                ->setCellValue('C4', 'Tgl. Diajukan')
                ->setCellValue('D4', 'Asal Surat')
                ->setCellValue('E4', 'Perihal')
                ->setCellValue('F4', 'Tempat')
                ->setCellValue('G4', 'Keterangan');

      $spreadsheet->getActiveSheet()
      ->getStyle('A4:G4')
      ->applyFromArray($header);

      //isi tabel
      $laporan = $this->pengajuan_model->cari_laporan($tanggalawal,$tanggalakhir)->asArray()->findAll();

      $column=5;
      $no=1;
      foreach($laporan as $data) {
        $spreadsheet->setActiveSheetIndex(0)
          ->setCellValue('A' . $column, $no)
          ->setCellValue('B' . $column, $data['nomorsurat'])
          ->setCellValue('C' . $column, date("d-m-Y", strtotime($data['created_at'])))
          ->setCellValue('D' . $column, $data['namalembaga'])
          ->setCellValue('E' . $column, $data['perihal'])
          ->setCellValue('F' . $column, $data['tempat'])
          ->setCellValue('G' . $column, $data['keterangan']);
      $column++;
      $no++;
    }

    $isitabel = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['rgb' => 'FF000000']
        ]
      ],
      'alignment' => [
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        'wrapText' => true
        ]
      ];

    //atur template isi tabel
    $spreadsheet->getActiveSheet()->getStyle('A4:G'.($column-1).'')->applyFromArray($isitabel);

    // tulis dalam format .xlsx
    $writer = new Xlsx($spreadsheet);
    $fileName = 'laporan_vidcon';

    // Redirect hasil generate xlsx ke web client
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    die;
    }
    public function ekspor_pdf(){
      $tanggalawal = $this->request->getVar('tanggalawal');
      $tanggalakhir = $this->request->getVar('tanggalakhir');
      //cek jika tanggal terisi
      if(!empty($tanggalawal) && !empty($tanggalakhir)){
        $laporan = $this->pengajuan_model->cari_laporan($tanggalawal,$tanggalakhir);
          $this->data = [
          'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
          //kirim data tabel laporan
          'laporan'           =>  $laporan->asArray()->findAll(),
          'pager'             =>  null,
          'halaman_sekarang'  =>  1,
          'tanggalawal'       =>  date("d-m-Y", strtotime($tanggalawal)),
          'tanggalakhir'      =>  date("d-m-Y", strtotime($tanggalakhir))
          ];
      }
      $tabellaporan= view('tabellaporan',$this->data);
      $dompdf = new Dompdf(['isHtml5ParserEnabled'=>true]);
      $dompdf->loadHtml($tabellaporan);

      // (Optional) Setup the paper size and orientation
      $dompdf->setPaper('folio', 'landscape');

      // Render the HTML as PDF
      $dompdf->render();

      // Output the generated PDF to Browser
      $dompdf->stream("laporan_vidcon.pdf");
    }

}
?>