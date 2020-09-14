<?php







?>

<?php
function show_array($data){
    echo "<pre>";
    print_r($data);
    echo "<pre>";
}
$conver_gender=array(
    'male'=>"Nam",
    'female'=>"Nu",
);
//1.dinh nghia thuc hien lenh khi da submit, post la phuong thuc truyen du lieu duoc nhap vao dua len server nen no mang luon gia tri va la ham ho tro lay thong tin
if(isset($_POST['btn_reg'])){
 //2. kiem tra du lieu bien ta can lay co rong hay thoa man dieu kien gi khong de thong bao va thuc thi  
    if(empty($_POST['gender'])){
        echo "ban chua chon gioi tinh";
    }else{
        //3. gan gia tri cho bien can lay va xuat ra ngoai. dat ten cho bien can gan gia tri la key=name=>$key/name
        $gender=$_POST['gender'];
        echo $gender."<br>";
        echo $conver_gender[$gender];
    }
}



?>




<html>

<head>
    <title>pass data form via method GET</title>
</head>
<!-- key chinh la name="username de thong qua phuong thuc post lay ket qua -->
<!-- name="",value="" deu la key de method post lay ket qua -->
<body>
<h1>form register</h1>
    <form action="" method="post">
        <input type="radio" name="gender" value="male" checked="checked" id="male"><label for="male">Nam</label> <br>
        
        <input type="radio" name="gender" value="female" id="female"><label for="female">Nu</label> <br>
        
        
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>

</html>