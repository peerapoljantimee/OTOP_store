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
        }
        // $this->conn = $conn;
    }

    /* -----------------------------------------------------------------------------
    # ฟังชั่น Member
    ----------------------------------------------------------------------------- */
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

    /* -----------------------------------------------------------------------------
    # ฟังชั่น Product
    ----------------------------------------------------------------------------- */
    public function insert_product($p_name, $p_detail, $p_price, $path_img)
    {
        //ตัวคอลลัมน์เป็นตัวหนังสือให้ใส่ ซิงเกิ้ลโคว้ตด้วย '' or ""
        $strSQL = "INSERT INTO shop_prod (prod_name, prod_detail, prod_price,prod_img)
        values ('$p_name', '$p_detail',$p_price,'$path_img')";
        $str = mysqli_query($this->conn, $strSQL);
        return $str;
    }

    public function display_prod()
    {
        $str = mysqli_query($this->conn, "SELECT * from shop_prod");
        return $str;
    }

    public function select_prod($id)
    {
        $str = mysqli_query($this->conn, "SELECT * from shop_prod where prod_id = '$id' ");
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

    /* ------------------------------------------------------------------------
    # Product Max
    --------------------------------------------------------------------*/
    public function select_product($id)
    {
        $str = mysqli_query($this->conn, "SELECT * FROM shop_prod WHERE prod_id = $id");
        return $str;
    }

    /* -----------------------------------------------------------------------------
    # ฟังชั่น Login
    ----------------------------------------------------------------------------- */
    public function check_login($username, $password)
    {
        // Get username and password from form

        // Prepare SQL statement to retrieve member details
        $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);
        return $result;
    }
    /* -----------------------------------------------------------------------------
    # ฟังชั่น order
    ----------------------------------------------------------------------------- */
    public function insert_order($member_id, $name, $email, $address, $total, $phone)
    {

        $sql = "insert into orders(member_id,name,email,address,total_ship,phone)
                values('$member_id','$name','$email','$address','$total','$phone')";
        return ($sql);

    }

    public function insert_orderProduct($order_id, $prod_id, $quantity, $sumPerItem)
    {

        $strSQL = "INSERT INTO order_product(order_id,prod_id,quantity,sumPerItem) 
        VALUES ($order_id,$prod_id,$quantity,$sumPerItem)";
        return ($strSQL);


    }
    public function display_order()
    {
        $str = mysqli_query($this->conn, "SELECT * FROM orders WHERE status = 'กำลังจัดเตรียมสินค้า'" );
        return $str;
    }
    public function chosen_order($id)
    {
        $str = mysqli_query($this->conn, "SELECT * from orders where order_id = $id");
        return $str;
    }
    public function edit_order_admin($status)
    {
        $str = mysqli_query($this->conn, "UPDATE orders SET status = '$status'");
        return $str;
    }

    
    public function edit_order($order_id,$member_id,$phone,$name,$email,$address,$status)
    {
        $str = mysqli_query($this->conn, "UPDATE orders SET name = '$name', member_id = '$member_id' , phone = '$phone',email = '$email',address = '$address',status = '$status' WHERE order_id = '$order_id' ");
        return $str;
    }
    public function del_order($id)
    {
        $str = mysqli_query($this->conn, "DELETE FROM orders WHERE order_id = $id ");
        return $str;
    }


    public function select_order($order_id)
    {
        $str = mysqli_query($this->conn, "SELECT * FROM orders WHERE order_id = $order_id" );
        return $str;
    }

    public function select_orderAll($order_id)
{
    $str = mysqli_query($this->conn, "SELECT *
        FROM orders o
        INNER JOIN order_product op ON o.order_id = op.order_id
        INNER JOIN shop_prod p ON op.prod_id = p.prod_id
        WHERE o.order_id = $order_id  ");
        return $str;
}

}


?>