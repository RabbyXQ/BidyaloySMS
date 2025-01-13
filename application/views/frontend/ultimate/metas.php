<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        <?php echo htmlspecialchars(get_phrase($page_title)); ?> | 
        <?php echo htmlspecialchars($this->db->get_where('schools', ['id' => school_id()])->row('name')); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully customized school management system" />
    <meta name="author" content="Creativeitem" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo htmlspecialchars($this->settings_model->get_favicon()); ?>">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rabbyx/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rabbyx/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rabbyx/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rabbyx/css/theme_blue.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/rabbyx/css/bootstrap.min.css">


    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/826a7e3dce.css" media="all">
</head>
