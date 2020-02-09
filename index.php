<?php include "page/body.php"?>
<body>
	<p align="center" style="margin: 150px 0px 0px 0px;"><a href="index.php">Home</a> - <a href="?id=profile">Profile</a> - <a href="?id=content">Content</a></p>
	<?php
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            switch ($id) {
                case 'profile':
                    include "page/profile.php";
                    break;
                case 'content':
                	include "page/mapel.php";
                	break;
                case 'quotes':
                	include "page/quotes.php";
                	break;
                default:
                    echo "<p align='center'>Sorry page not found!</p>";
                    break;
             }
        } elseif(isset($_GET['mapel'])) {
        		$mapel = $_GET['mapel'];
        		switch ($mapel) {
        			case 'ASJ':
        				include "page/mapel/ASJ/ASJ.php";
        				break;
        			case 'AIJ':
        				include "page/mapel/AIJ/AIJ.php";
        				break;
        			case 'TLJ':
        				include "page/mapel/TLJ/TLJ.php";
        				break;
        			default:
        				echo "<p align='center'>Sorry page not found!</p>";
        				break;
        		}
        	}
        else {
            include 'page/home.php';
        }
        ?>
</body>
<?php include "page/footer.php"?>