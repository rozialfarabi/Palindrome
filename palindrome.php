<?php
	function Palindrome($string){
		if(strlen($string) <= 1){
			return true;
		}
		else{
			if(substr($string, 0, 1) == substr($string,(strlen($string)-1),1)){
				return Palindrome(substr($string, 1, strlen($string)-2));
			}
			else{
				return false;
			}
		}
	}
?>

<form action="" method="POST">
    <table>
        <tr>
            <td>Kata</td>
            <td><input type="text" name="kata" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="cek" value="Cek"></td>
        </tr>
    </table>
</form>

<?php
	if(isset($_POST['cek'])){
		$kata = $_POST['kata'];

		echo "Kata = $kata <p>";
		
		$hasil = Palindrome($kata);

		if($hasil)
			echo "Palindrome";
		else
			echo "Bukan Palindrome";
	}

?>