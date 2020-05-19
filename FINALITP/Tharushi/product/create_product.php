<?php
// set page headers
$page_title = "Create Product";
include_once "layout_header.php";

// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$product = new Product($db);
$category = new Category($db);
 
// contents will be here
echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";
 
?>

<!-- 'create product' html form and PHP post code -->

<?php 
// if the form was submitted
if($_POST){
 
    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];
	$product->quantity = $_POST['quantity'];
    $product->category_id = $_POST['category_id'];
	$image=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
$product->image = $image;
 
    // create the product
    if($product->create()){
        echo "<div class='alert alert-success'>Product was created.</div>";
    
	// try to upload the submitted file
	// uploadPhoto() method will return an error message, if any.
	echo $product->uploadPhoto();
	}
	
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to create product.</div>";
    }
}
?>
 
<!-- HTML form for creating a product -->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' id='input1' required /></td>
        </tr>
 
        <tr>
            <td>Price</td>
            <td><input type='number' name='price' class='form-control' id='input2' required pattern ="^[0-9]+"/></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control' id='input3' required ></textarea></td>
        </tr>
		
		<tr>
            <td>Quantity</td>
            <td><input type='number' name='quantity' class='form-control'id='input4' required /></td>
        </tr>
		
		
 
        <tr>
            <td>Category</td>
            <td>
            <!-- categories load from database -->
			<?php
			// read the product categories from the database
			$stmt = $category->read();
 
			// put them in a select drop-down
			echo "<select class='form-control' name='category_id'>";
			echo "<option>Select category...</option>";
 
			while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row_category);
			echo "<option value='{$id}' id='input5'>{$name}</option>";
			}
 
			echo "</select>";
			?>
            </td>
        </tr>
		
		<tr>
			<td>Photo</td>
			<td><input type="file" name="image" /></td>
		</tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
		
		
 
    </table>
	<a href="#" onClick="autoFill(); return ture;">DEMO</a>
</form>

<script type="text/javascript">
function autoFill(){
	document.getElementById('input1').value="Pedigree Puppy ";
	document.getElementById('input2').value="1300.00";
	document.getElementById('input3').value="Dog food for puppy dog";
	document.getElementById('input4').value="400";
	document.getElementById('input5').value="Dog Food";
	
}
</script>

<?php
// footer
include_once "layout_footer.php";
?>

