@extends('layouts.screen')
@section('content')
<!-- Content Area -->

<div class="container  p-4 my-4" >
    <h1 class="text-black"> รายละเอียดการส่งข้อเสนอโครงการ </h1>
    <link rel="stylesheet" href="form.css">
   
    <div class ="card  p-4  my-4-lg ">
        <div class ="py-12 ">
            <div class ="container ">
                <div class ="row ">
                    <div class ="col-md-2 ">
                        <label for="Fname">คำนำหน้า</label>
                            <select>
                                <option value="นาย">--เลือก--</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="ดร.">ดร.</option>
                            </select> 
                    </div>
                    <div class ="col-md-5 ">
                            <label for="Fname">ชื่อ</label>
                            <input type="text" name="Fname" >
                    </div> 
                    <div class ="col-md-5 ">       
                            <label for="Lname">นามสกุล</label>
                            <input type="text" name="Fname" >
                    </div>
                </div>
            </div>
        </div>
            
        <div class ="py-12 ">
            <div class ="container ">
                <div class ="row ">
                    <div class ="col-md-2 ">
                        <label for="Lname">สถานะ</label>
                        <select>
                            <option value="นาย">--เลือก--</option>
                            <option value="นาย">นักศึกษา</option>
                            <option value="นาง">อาจารย์</option>
                        </select>
                    </div>
                    <div class ="col-md-5 ">
                        <label for="Lname">คณะ</label>
                        <input type="text" name="Fname" >
                    </div>
                    <div class ="col-md-5 ">
                        <label for="Lname">ชื่อโครงการ</label>
                        <input type="text" name="Fname" >
                    </div>
                </div>
            </div>
        </div>
       
            

                        <form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 1<br />
                            <input name="userfile[]" type="file" />
                            <input name="userfile[]" type="file" />
                        </form>
                        
                        <br><button type="submit" class="btn btn-primary btn-lg" >submit</button>
    </div> 
</div>


<!-- End Content -->
@endsection