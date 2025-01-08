<?php $school_id = school_id(); ?>

<form method="POST" class="p-3 d-block ajaxForm" action="<?php echo route('student/create_single_student'); ?>" id = "student_admission_form" enctype="multipart/form-data">
    <div class="col-md-12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="name"><?php echo get_phrase('name'); ?></label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="name" required>
            </div>
        </div>


        <!-- Father Name -->
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="father_name"><?php echo get_phrase('father_name'); ?></label>
            <div class="col-md-9">
                <input type="text" id="father_name" name="father_name" class="form-control" placeholder="Father's Name">
            </div>
        </div>

        <!-- Mother Name -->
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mother_name"><?php echo get_phrase('mother_name'); ?></label>
            <div class="col-md-9">
                <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="Mother's Name">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="father_mobile"><?php echo get_phrase('father_mobile'); ?></label>
            <div class="col-md-9">
                <input type="text" id="father_mobile" name="father_mobile" class="form-control" placeholder="Father Mobile" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mother_mobile"><?php echo get_phrase('mother_mobile'); ?></label>
            <div class="col-md-9">
                <input type="text" id="mother_mobile" name="mother_mobile" class="form-control" placeholder="Mother Mobile" required>
            </div>
        </div>

        <!-- Document Uploads -->
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="student_birth_certificate_number"><?php echo get_phrase('birth_registration_number'); ?></label>
            <div class="col-md-9">
                <input type="text" id="student_birth_certificate_number" name="student_birth_certificate_number" class="form-control" placeholder="BRC Number" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="father_nid"><?php echo get_phrase('father_nid'); ?></label>
            <div class="col-md-9">
                <input type="text" id="father_nid" name="father_nid" class="form-control" placeholder="Father NID Number" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mother_nid"><?php echo get_phrase('mother_nid'); ?></label>
            <div class="col-md-9">
                <input type="text" id="mother_nid" name="mother_nid" class="form-control" placeholder="Mother NID Number" required>
            </div>
        </div>

      


        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="email"><?php echo get_phrase('email'); ?></label>
            <div class="col-md-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="password"><?php echo get_phrase('password'); ?></label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
        </div>


        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="class_id"><?php echo get_phrase('class'); ?></label>
            <div class="col-md-9">
                <select name="class_id" id="class_id" class="form-control select2" data-toggle = "select2" required onchange="classWiseSection(this.value)">
                    <option value=""><?php echo get_phrase('select_a_class'); ?></option>
                    <?php $classes = $this->db->get_where('classes', array('school_id' => $school_id))->result_array(); ?>
                    <?php foreach($classes as $class){ ?>
                        <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="section_id"><?php echo get_phrase('section'); ?></label>
            <div class="col-md-9" id = "section_content">
                <select name="section_id" id="section_id" class="form-control select2" data-toggle = "select2" required >
                    <option value=""><?php echo get_phrase('select_section'); ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="birthdatepicker"><?php echo get_phrase('birthday'); ?></label>
            <div class="col-md-9 position-relative" id="datepicker4">
                <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4" name = "birthday"   value="<?php echo date('m/d/Y'); ?>" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="gender"><?php echo get_phrase('gender'); ?></label>
            <div class="col-md-9">
                <select name="gender" id="gender" class="form-control select2" data-toggle = "select2"  required>
                    <option value=""><?php echo get_phrase('select_gender'); ?></option>
                    <option value="Male"><?php echo get_phrase('male'); ?></option>
                    <option value="Female"><?php echo get_phrase('female'); ?></option>
                    <option value="Others"><?php echo get_phrase('others'); ?></option>
                </select>
            </div>
        </div>
        
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="blood_group"><?php echo get_phrase('blood_group'); ?></label>
            <div class="col-md-9">
                <select name="blood_group" id="blood_group" class="form-control select2" data-toggle = "select2"  required>
                    <option value=""><?php echo get_phrase('select_a_blood_group'); ?></option>
                    <option value="a+">A+</option>
                    <option value="a-">A-</option>
                    <option value="b+">B+</option>
                    <option value="b-">B-</option>
                    <option value="ab+">AB+</option>
                    <option value="ab-">AB-</option>
                    <option value="o+">O+</option>
                    <option value="o-">O-</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-textarea"><?php echo get_phrase('address'); ?></label>
            <div class="col-md-9">
                <textarea class="form-control" id="example-textarea" rows="5" name = "address" placeholder="address"></textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="phone"><?php echo get_phrase('phone'); ?></label>
            <div class="col-md-9">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-fileinput"><?php echo get_phrase('student_profile_image'); ?></label>
            <div class="col-md-9 custom-file-upload">
                <div class="wrapper-image-preview" style="margin-left: -6px;">
                    <div class="box" style="width: 250px;">
                        <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/users/placeholder.jpg'); ?>); background-color: #F5F5F5;"></div>
                        <div class="upload-options">
                            <label for="student_image" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_an_image'); ?> </label>
                            <input id="student_image" style="visibility:hidden;" type="file" class="image-upload" name="student_image" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4" onclick="check()"><?php echo get_phrase('add_student'); ?></button>
        </div>
    </div>
</form>

<script type="text/javascript">
$(".ajaxForm").validate({});
$(".ajaxForm").submit(function(e) {
  var form = $(this);
  ajaxSubmit(e, form, refreshForm);
});
var refreshForm = function () {
    form.trigger("reset");
}

function check() {
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var parent_id = $("#parent_id").val();
    var class_id = $("#class_id").val();
    var birthday = $("#birthday").val();
    var gender = $("#gender").val();
    var blood_group = $("#blood_group").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var father_name = $("#father_name").val();
    var mother_name = $("#mother_name").val();
    var father_mobile = $("#father_mobile").val();
    var mother_mobile = $("#mother_mobile").val();
    var brc_number = $("#brc_number").val();
    var father_nid_number = $("#father_nid_number").val();
    var mother_nid_number = $("#mother_nid_number").val();

    if (
        name == "" || email == "" || password == "" ||
        class_id == "" || birthday == "" || gender == "" || blood_group == "" ||
        address == "" || phone == "" || father_name == "" || mother_name == "" ||
        father_mobile == "" || mother_mobile == "" || brc_number == "" ||
        father_nid_number == "" || mother_nid_number == ""
    ) {
        error_notify('<?php echo get_phrase('please_fill_in_all_fields'); ?>');
    }
}

</script>
