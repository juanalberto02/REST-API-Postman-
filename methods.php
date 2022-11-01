<?php

class Mahasiswa
{
    public function get_mhss()
    {
        $data = array(
            array(
            'id' => '1',
            'nim' => '15119999',
            'nama' => 'Muhammad Al Fatih',
            'jk' => 'L',
            'alamat' => 'Jl. P puger 2 No.19',
            'jurusan' => 'Informatika',
            ),
            array(
            'id' => '2',
            'nim' => '16119212',
            'nama' => 'Fatimah',
            'jk' => 'P',
            'alamat' => 'Jl. RIngin Raya',
            'jurusan' => 'Sistem Informasi',
            ),
            array(
            'id' => '3',
            'nim' => '162112133027',
            'nama' => 'Juan',
            'jk' => 'L',
            'alamat' => 'Jl. Mawar Blok C No.9',
            'jurusan' => 'Teknologi Sains Data',
            ),
            );
        
        if(!empty($_GET['search'])) {
        $key = array_search($_GET['search'], array_column($data, 'id'),true);
        $id = $data[$key]['id'];
        $nim = $data[$key]['nim'];
        $nama = $data[$key]['nama'];
        $jk = $data[$key]['jk'];
        $alamat = $data[$key]['alamat'];
        $jurusan = $data[$key]['jurusan'];
        $result = array(  
        'id' => $id,
        'nim' => $nim,
        'nama' => $nama,
        'jk' => $jk,
        'alamat' => $alamat,
        'jurusan' => $jurusan,
        'status' => 'success'
        );
        } else {
        foreach($data as $d) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        $result['status'][] = 'success';
        }
        
        http_response_code(200);
        echo json_encode($result);
    }
    public function update_mhss()
    {
        $data = array(
            array(
            'id' => '1',
            'nim' => '15119999',
            'nama' => 'Muhammad Al Fatih',
            'jk' => 'L',
            'alamat' => 'Jl. P puger 2 No.19',
            'jurusan' => 'Informatika',
            ),
            array(
            'id' => '2',
            'nim' => '16119212',
            'nama' => 'Fatimah',
            'jk' => 'P',
            'alamat' => 'Jl. RIngin Raya',
            'jurusan' => 'Sistem Informasi',
            ),
            array(
            'id' => '3',
            'nim' => '162112133027',
            'nama' => 'Juan',
            'jk' => 'L',
            'alamat' => 'Jl. Mawar Blok C No.9',
            'jurusan' => 'Teknologi Sains Data',
            ),
            );

        $method = $_SERVER['REQUEST_METHOD'];
        if ('PUT' === $method) {
        parse_str(file_get_contents('php://input'), $_PUT);
        }
        // Function Edit Data
        if(!empty($_PUT['id']) && !empty($_PUT['nim']) && !empty($_PUT['nama']) && !empty($_PUT['jk']) && !empty($_PUT['alamat']) && !empty($_PUT['jurusan'] )) {
        foreach($data as & $value){
        if($value['id'] === $_PUT['id']){
        $value['nim'] = $_PUT['nim'];
        $value['nama'] = $_PUT['nama'];
        $value['jk'] = $_PUT['jk'];
        $value['alamat'] = $_PUT['alamat'];
        $value['jurusan'] = $_PUT['jurusan'];
        break; // Stop the loop after we've found the item
        }
        }
        // New Data
        foreach($data as $d) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        $result['status'] = 'success';
        } else {
        foreach($data as $d) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        $result['status'] = 'success';
        }
        
        http_response_code(200);
        echo json_encode($result);
    }
    public function insert_mhss()
    {
        $data = array(
            array(
            'id' => '1',
            'nim' => '15119999',
            'nama' => 'Muhammad Al Fatih',
            'jk' => 'L',
            'alamat' => 'Jl. P puger 2 No.19',
            'jurusan' => 'Informatika',
            ),
            array(
            'id' => '2',
            'nim' => '16119212',
            'nama' => 'Fatimah',
            'jk' => 'P',
            'alamat' => 'Jl. RIngin Raya',
            'jurusan' => 'Sistem Informasi',
            ),
            array(
            'id' => '3',
            'nim' => '162112133027',
            'nama' => 'Juan',
            'jk' => 'L',
            'alamat' => 'Jl. Mawar Blok C No.9',
            'jurusan' => 'Teknologi Sains Data',
            ),
            );
            
        if(!empty($_POST['id']) && !empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['jk']) && !empty($_POST['alamat']) && !empty($_POST['jurusan'] )) {
        // New Data Input
        $newdata = array(
        'id' => $_POST['id'],
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'jk' => $_POST['jk'],
        'alamat' => $_POST['alamat'],
        'jurusan' => $_POST['jurusan'],
        );
        // Add Data
        $data[] = $newdata;
        // New Data
        foreach($data as $d) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        $result['status'] = 'success';
        } else {
        foreach($data as $d) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        $result['status'] = 'success';
        }
        
        http_response_code(200);
        echo json_encode($result);
        }
    
    public function delete_mhss()
    {
        $data = array(
            array(
            'id' => '1',
            'nim' => '15119999',
            'nama' => 'Muhammad Al Fatih',
            'jk' => 'L',
            'alamat' => 'Jl. P puger 2 No.19',
            'jurusan' => 'Informatika',
            ),
            array(
            'id' => '2',
            'nim' => '16119212',
            'nama' => 'Fatimah',
            'jk' => 'P',
            'alamat' => 'Jl. RIngin Raya',
            'jurusan' => 'Sistem Informasi',
            ),
            array(
            'id' => '3',
            'nim' => '162112133027',
            'nama' => 'Juan',
            'jk' => 'L',
            'alamat' => 'Jl. Mawar Blok C No.9',
            'jurusan' => 'Teknologi Sains Data',
            ),
            );
        
        $method = $_SERVER['REQUEST_METHOD'];
        if ('DELETE' === $method) {
        parse_str(file_get_contents('php://input'), $_DELETE);
        }
        // Function Edit Data
        if(!empty($_DELETE['id'])) {
        // New Data
        foreach($data as $d) {
        if($d['id'] != $_DELETE['id']) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        }
        $result['status'] = 'success';
        } else {
        foreach($data as $d) {
        $result['data'][] = array(
        'id' => $d['id'],
        'nim' => $d['nim'],
        'nama' => $d['nama'],
        'jk' => $d['jk'],
        'alamat' => $d['alamat'],
        'jurusan' => $d['jurusan'],
        );
        }
        $result['status'] = 'success';
        }
        
        
        http_response_code(200);
        echo json_encode($result);
    }
}
?>