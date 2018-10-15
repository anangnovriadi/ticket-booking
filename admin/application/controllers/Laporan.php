<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('mdlpemesanan');
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $this->load->helper('url');
    }

    public function index() 
    {
        $this->load->view('laporan/laporanPage');
    }

    public function kapal() {
        $excel = new PHPExcel();
        $excel->getProperties()->setCreator('My Notes Code')
                    ->setLastModifiedBy('My Notes Code')
                    ->setTitle("Data Pemesanan Tiket Kapal")
                    ->setSubject("Tiket Pesawat")
                    ->setDescription("Laporan Data Pemesanan Tiket Kapal")
                    ->setKeywords("Data Tiket Kapal");
        $style_col = array(
        'font' => array('bold' => true),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );

        $style_row = array(
        'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );
        
        $tgl_pemesanan = $this->input->post('tgl_pemesanan');
        $kapal = $this->mdlpemesanan->getAllPemesananKapal($tgl_pemesanan)->result();
        
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Pemesanan Tiket Kapal Terakhir");
        $excel->getActiveSheet()->mergeCells('A1:F1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->setActiveSheetIndex(0)->setCellValue('A3', 'No');
        $excel->setActiveSheetIndex(0)->setCellValue('B3', 'Nama Kapal');
        $excel->setActiveSheetIndex(0)->setCellValue('C3', 'Nama Pemesan');
        $excel->setActiveSheetIndex(0)->setCellValue('D3', 'Keberangkatan');
        $excel->setActiveSheetIndex(0)->setCellValue('E3', 'Tujuan');
        $excel->setActiveSheetIndex(0)->setCellValue('F3', 'Tanggal Keberangkatan');

        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);

        $no = 1;
        $numrow = 4;
        foreach($kapal as $data){
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama_kapal);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_lengkap);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->pelabuhan_asal);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->pelabuhan_tujuan);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->tgl_keberangkatan);
      
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(35); // Set width kolom F
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        
        $excel->getActiveSheet(0)->setTitle("Laporan Data Tiket Pesawat");
        $excel->setActiveSheetIndex(0);
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Tiket Kapal.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }

    public function pesawat() {
        $excel = new PHPExcel();
        $excel->getProperties()->setCreator('My Notes Code')
                    ->setLastModifiedBy('My Notes Code')
                    ->setTitle("Data Pemesanan Tiket Pesawat")
                    ->setSubject("Tiket Pesawat")
                    ->setDescription("Laporan Data Pemesanan Tiket Pesawat")
                    ->setKeywords("Data Tiket Pesawat");
        $style_col = array(
        'font' => array('bold' => true),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );

        $style_row = array(
        'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );
        
        $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
        $pesawat = $this->mdlpemesanan->getAllPemesananPesawat($tgl_keberangkatan)->result();
        
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Pemesanan Tiket Pesawat Terakhir");
        $excel->getActiveSheet()->mergeCells('A1:F1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->setActiveSheetIndex(0)->setCellValue('A3', 'No');
        $excel->setActiveSheetIndex(0)->setCellValue('B3', 'Nama Pesawat');
        $excel->setActiveSheetIndex(0)->setCellValue('C3', 'Nama Pemesan');
        $excel->setActiveSheetIndex(0)->setCellValue('D3', 'Keberangkatan');
        $excel->setActiveSheetIndex(0)->setCellValue('E3', 'Tujuan');
        $excel->setActiveSheetIndex(0)->setCellValue('F3', 'Tanggal Keberangkatan');

        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);

        $no = 1;
        $numrow = 4;
        foreach($pesawat as $data){
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama_pesawat);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_lengkap);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->keberangkatan);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->tujuan);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->tgl_keberangkatan);
      
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(35); // Set width kolom F
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        
        $excel->getActiveSheet(0)->setTitle("Laporan Data Tiket Pesawat");
        $excel->setActiveSheetIndex(0);
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Tiket Pesawat.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
}

?>