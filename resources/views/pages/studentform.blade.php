@extends('layouts.screen')
@section('content')
<!-- Content Area -->

<div class="container  p-4 my-4" >
    <h1 class="text-black"> รายละเอียดการส่งข้อเสนอโครงการนักศึกษา </h1>
    <!-- <link rel="stylesheet" href="form.css"> -->


    <div class ="card  p-4  my-4-lg ">
        <label for="Lname">เลขที่โครงการ</label>
                <input type="text" name="Fname" >
                

        <div class ="py-12 ">
            <div class ="container ">
                <div class ="row ">
                    <div class ="col-md-3 ">
                    <br><td><label for="Fname">คำนำหน้า</label>
                            <select>
                                <option value="นาย">--เลือก--</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="ดร.">ดร.</option>
                            </select> 
                    </div>
                    <div class ="col-md-4 ">
                        <br><td><label for="Fname">ชื่อ</label>
                            <input type="text" name="Fname" >
                    </div> 
                    <div class ="col-md-4 ">       
                        <br><td><label for="Lname">นามสกุล</label>
                            <input type="text" name="Fname" >
                    </div>
                </div>
            </div>
        </div>

        <br><td><label for="Lname">สถานะ</label>
            <select>
                <option value="นาย">--เลือก--</option>
                <option value="นาย">นักศึกษา</option>
                <option value="นาง">อาจารย์</option>
            </select>
                    


        <br><td><label for="Lname">คณะ</label>
            <input type="text" name="Fname" >
                   


        <br><td><label for="Lname">ชื่อโครงการ</label>
            <input type="text" name="Fname" >
        
        
        <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 1</br></td>
                        <input name="userfile[]" type="file" />
                </form>
        

        <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 2</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 3</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 4</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 5</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 6</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 7</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 8</br></td>
                    <input name="userfile[]" type="file" />
            </form>

            <br><td><form action="file-upload.php" method="post" enctype="multipart/form-data">ขั้นตอนที่ 9</br></td>
                    <input name="userfile[]" type="file" />
            </form>




                        
            <br><td><button type="submit" class="btn btn-primary btn-lg" >submit</button></td></br>
    </div> 
</div>


<!-- End Content -->
@endsection