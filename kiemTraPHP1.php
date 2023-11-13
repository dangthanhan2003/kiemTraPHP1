<?php
echo"Bài 1:<br>";
//Hàm isPrime
function isPrime($number)
{
    if ($number <= 1 || !is_int($number)) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "$i ";
    }
}
//Kiểm tra function isPrime
echo"<br>";
$number=1.1;
if(isPrime($number)){
    echo"$number là số nguyên dương";
}   else{
    echo"$number không phải là số nguyên dương";
}
echo"<br>";
?>
<?php
echo"Bài 2:";
// Tạo mảng kết hợp chứa thông tin về sản phẩm
$product = ['name' => 'Chuột không dây','price' => 200000,'quantity' => 10];
// Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "Thông tin các sản phẩm:\n";
    echo "Tên: " . $product['name'] . "<br>";
    echo "Giá: " . $product['price'] . " đồng <br>";
    echo "Số lượng: " . $product['quantity'] . "cái <br>";
// Tạo hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotal($product)
{
    $totalValue = 0;
        $totalValue = $product['price'] * $product['quantity'];
    return $totalValue;
}
// Tính tổng giá trị của tất cả sản phẩm
$totalValue = calculateTotal($product);
echo "Tổng giá trị của tất cả sản phẩm: " . $totalValue . " đồng<br>";
?>


