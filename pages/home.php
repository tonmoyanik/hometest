<?php include 'header.php'?>

<style>
    body{
        background-color: #545b62;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card bg-info text-white">
                    <div class="card-header text-center bg-dark">
                        <h4> My Information</h4>
                    </div>
                    <div class="card-body">
                        <h3>NAME: <?php echo $_SESSION['name']?></h3>
                        <h5>EMAIL: <?php echo $_SESSION['email']?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
