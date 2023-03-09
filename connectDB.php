<!-- Pamornpon Teethong 6430250229 -->
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shop_otop');

class DB_conn
{
    public $conn;
    function __construct()
    {
        // mysqli_connect เชื่อม table ใน database 
        $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        // $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
        //check connect
        if ($this->conn === false) {
            // if($conn === false){
            die("ERROR: Could not connect." . mysqli_connect_error());
        } else {
            echo "Connect Success!!!";
        }
        // $this->conn = $conn;
    }
    // function insert_member(){
    function insert_member($name, $email, $username, $password, $address)
    {
        $sql = "insert into member(name,email,username,password,address)
                values('$name','$email','$username','$password','$address')";
        return ($sql);
    }
    public function display_member()
    {
        $str = mysqli_query($this->conn, "SELECT * from member");
        return $str;
    }
    public function display_member_edit($id)
    {
        $str = mysqli_query($this->conn, "SELECT * from member where member_id = $id");
        return $str;
    }
    public function edit_member($fname, $lastname, $email, $id)
    {
        $str = mysqli_query($this->conn, "UPDATE member SET first_name = '$fname', last_name =
       '$lastname',
        email = '$email' WHERE member_id = $id ");
        return $str;
    }
    public function del_member($id)
    {
        $str = mysqli_query($this->conn, "DELETE FROM member WHERE member_id = $id ");
        return $str;
    }
    // public function select_category(){
    //     $strSQL = "SELECT * FROM category ORDER BY c_name ASC";
    //     $str = mysqli_query($this->conn, $strSQL);
    //     return $str;
    // }
    //product
    public function select_category()
    {
        $str = mysqli_query($this->conn, "SELECT * from category");
        return $str;
    }
    public function insert_product($p_name, $p_detail, $p_price, $p_category, $path_img)
    {
        //ตัวคอลลัมน์เป็นตัวหนังสือให้ใส่ ซิงเกิ้ลโคว้ตด้วย '' or ""
        $strSQL = "INSERT INTO product (pName, pDetail, pPrice,c_id, pImage)
        values ('$p_name', '$p_detail',$p_price,$p_category,'$path_img')";
        $str = mysqli_query($this->conn, $strSQL);
        return $str;
    }
    public function display_prod()
    {
        $str = mysqli_query($this->conn, "SELECT * from shop_prod");
        return $str;
    }
    
}

?>