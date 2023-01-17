$servername='localhost'
$username='username'
$password='password'
$dbName='myDb'

$conn=new mysqli($servername,$username,$password,$dbName)
if(conn-> connect_error){
    die('connection failed': .$conn->connect_error )
    
}
$name=$_POST['name']
$product_type=$_POST['product_type']
$units=$_POST['units']
<!-- calculate vat -->
function vat(){
    $vat=0
    if(isset($product_type && $product_type="B"){
     $vat=$unit * 18600 * 18/100
    }
    return $vat
}
function discount(){
    $discount=0
    if(isset($product_type && $product_type="A")){
        if($unit * 10200 >= 65000){
            $discount=$unit * 10200 * 15/100
        }
    }
    return discount
}
<!-- calculate total pay -->
$price=0;
 if(isset($product_type && $product_type="A")){
    $price=10200

 }
 elseif(isset($product_type && $product_type="A")){
    $price=18600

 }
 $total=$unit * $price + vat - discount


<!--  web appliction for garbage collection-->
$servername='localhost'
$username='username'
$password='password'
$dbName='myDb'

$conn=new mysqli($servername,$username,$password,$dbName)
if(conn-> connect_error){
    die('connection failed': .$conn->connect_error )
    
}
$client_number=$_POST['number']
 $region=$_POST['garbage']
function vat(){
    $vat=0
    if(isset($garbage && $garbage='X')){
       
            $vat=1030 * 16/100
    }
    return $vat
}
function additional_cost(){
    $additional=0
    if(isset($region && $region='Y')){
        
            $additional=100
        
        elseif{
            if($region && $region='Z'){
                $additional=90
            }
        }
    }
    return $additional
}
$price=0
if(isset($region && $region='X')){
  
        $price=1030
    
    elseif($region && $region='Y'){
           $price=1120
    }
    elseif($region="Z"){
        $price=1245
    }
}
$charges=$price + $vat + $additional
$sql = $conn->prepare("INSERT INTO garbage (client_name, region, charges) VALUES (?, ?, ?)");
$sql->bind_param("sss", $client_number, $region, $charges);

