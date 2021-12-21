<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Welcome!</div>
                   <div class="card-body">
                    
                    <p>Email received from: <?php echo e($email); ?></p>
                    <p>User information:</p>
                        
                        Name : <?php echo $name; ?><br/>
                        
                        Phone : <?php echo $phone; ?><br/>
                        
                        Subject : <?php echo e($subject); ?><br/>
                        
                        Message : <?php echo e($pesan); ?><br/>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/contact/contact-template.blade.php ENDPATH**/ ?>