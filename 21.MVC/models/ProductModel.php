<?php
class ProductModel extends Model {

    //lay tat ca
    public function getAll(){
        

        $sql = "SELECT * FROM c10_mat_hang";
        // fetchAll
        $stmt = $this->conn->query($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();

        return $rows;
    }

    //lay chi tiet
    public function find($id){
        $sql = "SELECT * FROM products WHERE id = ".$id;
        // fetch
    }

    //them
    public function save($data){
        // exec
    }

    //sua
    public function update($id,$data){
        // exec
    }

    //xoa
    public function destroy($id){
        // exec
    }
}