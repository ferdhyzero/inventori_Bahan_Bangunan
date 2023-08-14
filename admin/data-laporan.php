<?php
require('fpdf/fpdf.php'); // Mengimpor library FPDF

class PDF extends FPDF
{
    // Fungsi untuk menghasilkan header halaman
    function Header()
    {
        $this->SetFont('Arial', 'B', 10); // Mengatur font, bold, dan ukuran font
        $this->Cell(0, 10, 'Laporan Barang Dikembalikan', 0, 1, 'C'); // Menampilkan teks dalam sel
        $this->Ln(5); // Baris baru
    }

    // Fungsi untuk menghasilkan footer halaman
    function Footer()
    {
        $this->SetY(-15); // Mengatur posisi Y pada bagian bawah halaman
        $this->SetFont('Arial', 'I', 8); // Mengatur font, italic, dan ukuran font
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . '/{nb}', 0, 0, 'C'); // Menampilkan nomor halaman
    }

    // Fungsi untuk menghasilkan tabel data
    function Content($data)
    {
        $this->SetFont('Arial', '', 10); // Mengatur font dan ukuran font
        $this->SetFillColor(230, 230, 230); // Mengatur warna latar belakang sel
        $this->SetTextColor(0); // Mengatur warna teks

        // Menampilkan header tabel
        $this->Cell(10, 10, 'No', 1, 0, 'C', true);
        $this->Cell(50, 10, 'Nama Barang', 1, 0, 'C', true);
        $this->Cell(40, 10, 'Nama Peminjam', 1, 0, 'C', true);
        $this->Cell(43, 10, 'Tingkatan', 1, 0, 'C', true);
        $this->Cell(43, 10, 'Jumlah Barang', 1, 0, 'C', true);
        $this->Cell(45, 10, 'Tanggal Pinjam', 1, 0, 'C', true);
        $this->Cell(45, 10, 'Tanggal Kembali', 1, 1, 'C', true);

        // Menampilkan data
        $this->SetFont('Arial', '', 10); // Mengatur font dan ukuran font
        $this->SetFillColor(255); // Mengatur warna latar belakang sel
        $this->SetTextColor(0); // Mengatur warna teks

        $no = 1; // Variabel untuk menyimpan nomor urut
        foreach ($data as $row) {
            $this->Cell(10, 10, $no++, 1, 0, 'C');
            $this->Cell(50, 10, $row['nama_barang'], 1, 0, 'L');
            $this->Cell(40, 10, $row['peminjam'], 1, 0, 'C');
            $this->Cell(43, 10, $row['level'], 1, 0, 'C');
            $this->Cell(43, 10, $row['jml_barang'], 1, 0, 'C');
            $this->Cell(45, 10, $row['tgl_pinjam'], 1, 0, 'C');
            $this->Cell(45, 10, $row['tgl_kembali'], 1, 1, 'C');
        }
    }
}

include '../config.php';
$data = array(); // Array untuk menyimpan data

// Query ke database untuk mendapatkan data barang dikembalikan
$query = mysqli_query($mysqli, "SELECT * FROM tbl_transaksi ORDER BY id DESC");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
}

$pdf = new PDF(); // Membuat objek PDF
$pdf->AliasNbPages(); // Mengatur total halaman
$pdf->AddPage(); // Menambah halaman
$pdf->Content($data); // Menampilkan konten tabel
$pdf->Output(); // Menghasilkan output PDF
?>
