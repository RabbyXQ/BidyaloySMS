<!--title-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">
                <i class="mdi mdi-update title_icon"></i> <?php echo get_phrase('student_update_form'); ?>
            </h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card pt-0">
            <div class="card-body">
                <?php $school_id = school_id(); ?>
                <?php $student = $this->db->get_where('students', array('id' => $student_id))->row_array(); ?>
                <?php $enroll = $this->db->get_where('enrols', array('student_id' => $student_id))->row_array(); ?>
                <h4 class="text-center mx-0 py-2 mt-0 mb-3 px-0 text-white bg-primary"><?php echo get_phrase('update_student_information'); ?></h4>
                <form method="POST" class="col-12 d-block ajaxForm" action="<?php echo route('student/updated/'.$student_id.'/'.$student['user_id']); ?>" id = "student_update_form" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="name"><?php echo get_phrase('name'); ?></label>
                            <div class="col-md-9">
                                <input type="text" id="name" name="name" class="form-control"  value="<?php echo $this->user_model->get_user_details($student['user_id'], 'name'); ?>" placeholder="name" required>
                            </div>
                        </div>
<!-- Email -->
<div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="email"><?php echo get_phrase('email'); ?></label>
    <div class="col-md-9">
        <input type="email" class="form-control" id="email" name="email" 
               value="<?php echo $this->user_model->get_user_details($student['user_id'], 'email'); ?>" 
               placeholder="email" required>
    </div>
</div>

    <!-- Father Name -->
    <div class="form-group row mb-3">
        <label class="col-md-3 col-form-label" for="father_name"><?php echo get_phrase('father_name'); ?></label>
        <div class="col-md-9">
            <input type="text" id="father_name" name="father_name" class="form-control" 
                value="<?php echo $this->user_model->get_user_details($student['user_id'], 'father_name'); ?>" 
                placeholder="Father's Name">
        </div>
    </div>

        <!-- Mother Name -->
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mother_name"><?php echo get_phrase('mother_name'); ?></label>
            <div class="col-md-9">
                <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="Mother's Name" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'mother_name'); ?>">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="father_mobile"><?php echo get_phrase('father_mobile'); ?></label>
            <div class="col-md-9">
                <input type="text" id="father_mobile" name="father_mobile" class="form-control" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'father_mobile'); ?>" placeholder="Father Mobile" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mother_mobile"><?php echo get_phrase('mother_mobile'); ?></label>
            <div class="col-md-9">
                <input type="text" id="mother_mobile" name="mother_mobile" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'mother_mobile'); ?>" class="form-control" placeholder="Mother Mobile" required>
            </div>
        </div>

        <!-- Document Uploads -->
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="student_birth_certificate_number"><?php echo get_phrase('birth_registration_number'); ?></label>
                        <div class="col-md-9">
                            <input type="text" id="student_birth_certificate_number" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'student_birth_certificate_number'); ?>" name="student_birth_certificate_number" class="form-control" placeholder="BRC Number" required>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="father_nid"><?php echo get_phrase('father_nid'); ?></label>
                        <div class="col-md-9">
                            <input type="text" id="father_nid" name="father_nid" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'father_nid'); ?>"  class="form-control" placeholder="Father NID Number" required>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="mother_nid" ><?php echo get_phrase('mother_nid'); ?></label>
                        <div class="col-md-9">
                            <input type="text" id="mother_nid" name="mother_nid" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'mother_nid'); ?>"  class="form-control" placeholder="Mother NID Number" required>
                        </div>
                    </div>


                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="class_id"><?php echo get_phrase('class'); ?></label>
                            <div class="col-md-9">
                                <select name="class_id" id="class_id" class="form-control" required onchange="classWiseSectionOnStudentEdit(this.value)">
                                    <option value=""><?php echo get_phrase('select_a_class'); ?></option>
                                    <?php $classes = $this->db->get_where('classes', array('school_id' => $school_id))->result_array(); ?>
                                    <?php foreach($classes as $class){ ?>
                                        <option value="<?php echo $class['id']; ?>" <?php if($enroll['class_id'] == $class['id']) echo 'selected'; ?>><?php echo $class['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="section_id"><?php echo get_phrase('section'); ?></label>
                            <div class="col-md-9" id = "section_content">
                                <select name="section_id" id="section_id" class="form-control" required >
                                    <option value=""><?php echo get_phrase('select_a_section'); ?></option>
                                    <?php $sections = $this->db->get_where('sections', array('class_id' => $enroll['class_id']))->result_array(); ?>
                                    <?php foreach($sections as $section){ ?>
                                        <option value="<?php echo $section['id']; ?>" <?php if($enroll['section_id'] == $section['id']) echo 'selected'; ?>><?php echo $section['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="birthdatepicker"><?php echo get_phrase('birthday'); ?></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control date" id="birthdatepicker" data-bs-toggle="date-picker" data-single-date-picker="true" name = "birthday"  value="<?php echo date('m/d/Y', $this->user_model->get_user_details($student['user_id'], 'birthday')); ?>" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="gender"><?php echo get_phrase('gender'); ?></label>
                            <div class="col-md-9">
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value=""><?php echo get_phrase('select_gender'); ?></option>
                                    <option value="Male" <?php if($this->user_model->get_user_details($student['user_id'], 'gender') == 'Male') echo 'selected'; ?>><?php echo get_phrase('male'); ?></option>
                                    <option value="Female" <?php if($this->user_model->get_user_details($student['user_id'], 'gender') == 'Female') echo 'selected'; ?>><?php echo get_phrase('female'); ?></option>
                                    <option value="Others" <?php if($this->user_model->get_user_details($student['user_id'], 'gender') == 'Others') echo 'selected'; ?>><?php echo get_phrase('others'); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="blood_group"><?php echo get_phrase('blood_group'); ?></label>
                            <div class="col-md-9">
                                <select name="blood_group" id="blood_group" class="form-control select2" data-toggle = "select2"  required>
                                    <option value=""><?php echo get_phrase('select_a_blood_group'); ?></option>
                                    <option value="a+"  <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'a+') echo 'selected'; ?>>A+</option>
                                    <option value="a-"  <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'a-') echo 'selected'; ?>>A-</option>
                                    <option value="b+"  <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'b+') echo 'selected'; ?>>B+</option>
                                    <option value="b-"  <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'b-') echo 'selected'; ?>>B-</option>
                                    <option value="ab+" <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'ab+') echo 'selected'; ?>>AB+</option>
                                    <option value="ab-" <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'ab-') echo 'selected'; ?>>AB-</option>
                                    <option value="o+"  <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == 'o+') echo 'selected'; ?>>O+</option>
                                    <option value="o-"  <?php if(strtolower($this->user_model->get_user_details($student['user_id'], 'blood_group')) == '0-') echo 'selected'; ?>>O-</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="example-textarea"><?php echo get_phrase('address'); ?></label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="example-textarea" rows="5" name = "address" placeholder="address"><?php echo $this->user_model->get_user_details($student['user_id'], 'address'); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="phone"><?php echo get_phrase('phone'); ?></label>
                            <div class="col-md-9">
                                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $this->user_model->get_user_details($student['user_id'], 'phone'); ?>" placeholder="phone" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="example-fileinput"><?php echo get_phrase('student_profile_image'); ?></label>
                            <div class="col-md-9 custom-file-upload">
                                <div class="wrapper-image-preview" style="margin-left: -6px;">
                                    <div class="box" style="width: 250px;">
                                        <div class="js--image-preview" style="background-image: url(<?php echo $this->user_model->get_user_image($student['user_id']); ?>); background-color: #F5F5F5;"></div>
                                        <div class="upload-options">
                                            <label for="student_image" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_an_image'); ?> </label>
                                            <input id="student_image" style="visibility:hidden;" type="file" class="image-upload" name="student_image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4"><?php echo get_phrase('update_student_information'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
var form;
$(".ajaxForm").submit(function(e) {
    form = $(this);
    ajaxSubmit(e, form, refreshForm);
});
var refreshForm = function () {

}

function classWiseSectionOnStudentEdit(classId) {
    $.ajax({
        url: "<?php echo route('section/list/'); ?>"+classId,
        success: function(response){
            $('#section_id').html(response);
        }
    });
}
</script>
