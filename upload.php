 <?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
require_once './dbConn.php';


$allowed_img_extension = ['jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG'];

if(isset($_POST['send']))
{
    $file_extension = pathinfo($_FILES['kep']['name'], PATHINFO_EXTENSION);
        if(isset($_FILES['kep']))
        {   
            if(in_array($file_extension, $allowed_img_extension))
            {
                if($_FILES['kep']['size'] < 2000000)
                {
                    copy($_FILES['kep']['tmp_name'], './assets/uploaded/'. $_FILES['kep']['name']);
                }else{
                    print('a feltölteni kívánt kép túl nagy');
                }

            }else{
                print('nem megfelelő formátum');
            }

        }else{
            print('a feltöltés sikertelen');
        }

    
    $firstname       = $_POST['c_fname'];
    $lastname        = $_POST['c_lname'];
    $email           = $_POST['c_email'];
    $contactText     = $_POST['c_textarea'];
    $contactTopic    = $_POST['topic'];
    $contactFileName = $_FILES['kep']['name'];
    $contactUserId   = $_SESSION['felhasznalo']['id'];

   $sql = mysqli_query($conn, "INSERT INTO contact(contact_firstname, contact_lastname, 
                                              contact_email, contact_text, contact_topic,
                                              contact_file, contact_user_id, uploaded_at)
                        VALUES ('".$firstname."' , '".$lastname."' , '".$email."' , 
                                '".$contactText."' , '".$contactTopic."' , '".$contactFileName."' ,
                                '".$contactUserId."','" .date('Y-m-d h:m:s')."')");
    }

mysqli_free_result($result);
mysqli_close($conn);

    header('Location: http://localhost/space/index.php');

