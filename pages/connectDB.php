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
    public function edit_member($username, $password, $name, $email, $address, $id)
    {
        $str = mysqli_query($this->conn, "UPDATE member SET username = '$username', password =
       '$password',
        name = '$name', email = '$email', address = '$address' WHERE member_id = $id ");
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
    public function insert_product($p_name, $p_detail, $p_price, $path_img)
    {
        //ตัวคอลลัมน์เป็นตัวหนังสือให้ใส่ ซิงเกิ้ลโคว้ตด้วย '' or ""
        $strSQL = "INSERT INTO shop_prod (prod_name, prod_detail, prod_price,prod_img)
        values ('$p_name', '$p_detail',$p_price,'$path_img')";
        $str = mysqli_query($this->conn, $strSQL);
        return $str;
    }
        // ฟังชั่นของ ส้้นตรีน
    public function display_prod()
    {
        $str = mysqli_query($this->conn, "SELECT * from shop_prod");
        return $str;
    }


    public function del_prod($id)
    {
        $str = mysqli_query($this->conn, "DELETE FROM shop_prod WHERE prod_id = $id ");
        return $str;
    }

    public function display_prod_edit($id)
    {
        $str = mysqli_query($this->conn, "SELECT * from shop_prod where prod_id = '$id' ");
        return $str;
    }

    public function edit_prod($pname, $price, $detail, $id)
    {
        $str = mysqli_query($this->conn, "UPDATE shop_prod SET prod_name = '$pname', prod_price = '$price', prod_detail = '$detail' WHERE prod_id = '$id' ");
        return $str;
    }


    //Login Form
    public function check_login($username,$password)
    {
            // Get username and password from form
        
            // Prepare SQL statement to retrieve member details
            $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
            $result = $this->conn->query($sql);
            return $result;
    }
    
}

?>