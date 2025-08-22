@extends('layouts.app')
@section('title', 'About Kazumi Japanese Language School | Powered by Henry Harvin')
@section('meta_description', 'Kazumi Japanese & Culture School by Henry Harvin® helps students master the Japanese language and culture through immersive instruction by experts.')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style href = "https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></style>
<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src = "https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<style>
 .single-box {
    padding: 20px 30px !important;

}
span#select2-course-select-container {
    
}




.select2-container .select2-selection--single{
    height: 50px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    
    line-height: 43px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 48px;
}
div#example_length select {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: 0.3rem 2rem 0.3rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    div#example_length label {
    font-size: 17px !important;
    line-height: 50px;
    color: #df0c0c;
}
#example thead tr th {
    color: #fff;
    background-color: #df0c0c;
    border-color: #3387e2;
}
#example tbody tr:nth-of-type(odd) {
    background-color: rgba(235,242,255,.46);
}

.single-box {
    border: 1px dashed #cdf1d8;
    padding: 20px 5px;
    position: relative;
    z-index: 1;
    border-radius: 5px;
    background: #fff;
    -webkit-box-shadow: 0 0 10px rgb(72 69 224 / 10%);
    box-shadow: 0 0 10px rgb(72 69 224 / 10%);
    -webkit-transition: .5s;
    transition: .5s;
    margin-bottom: 25px;
}
div#example_info {
    line-height: 46px;
    letter-spacing: 1px;
    color: #df0c0c;
    font-size: 14px;
}
.heading-text h2 {
    position: relative;
    display: block;
    padding: 0 0 10px;
    color: #df0c0c;
    font-size: 22px;
    line-height: 28px;
    font-weight: 600;
    text-transform: none;
    margin: 0 0 20px;
}
.heading-text h2:after {
    content: "";
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    height: 3px;
    background-repeat: repeat-x;
    width: 90px;
    left: 0;
    background: #df0c0c;
}
p {
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 26px;
    color: #252525;
    font-family: 'Open Sans',sans-serif;
}
#table-id .thead-dark th {
    color: #fff;
    background-color: #4f2d7f;
    border-color: #7848a3;
}
.form-group .form-control {
    border-radius: 4px;
    font-size: 14px;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}

.table-sm td, .table-sm th {
    padding: 0.3rem;
}
.table td, .table th {
    font-size: 14px;
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
table td, table th {
    padding: 0.5em;
    border: 1px solid #767676;
    word-break: break-all;
}
#table-id tbody tr:nth-of-type(odd) {
    background-color:rgb(248 245 253);
}

div#example_paginate {
    display: none;
}
</style>
<style>
    .custome-top{
    margin-top: 67px;
    background-color: #4f2d7f;
    }

    .custome-font{
        font-size: 40px;
       }
     @media(min-width:767px) {
       .custome-font{
        font-size: 48px;
       }
     }
     @media(min-width:1092px) {
       .custome-font{
        font-size: 60px;
       }
     }
</style>

<style>
section#menu-itemss ul {
    width: -webkit-fill-available;
    display: -webkit-inline-box!important;
    background-color: #4f2d7f!important;
    overflow-x: auto;
    font-size: 14px;
    padding: 11px;
    justify-content: space-around;
    list-style: none;
    background: #4f2d7f;
    color: white;
}
.select2-container {
    width: 100% !important;
}
section#menu-itemss ul li { 
    margin: 3px !important;
}
section#menu-itemss ul li {
  
  padding: 8px 17px !important;
}
section#menu-itemss ul li a {
    color: white;
}

</style>

<div class="container py-12 px-4 max-w-7xl mx-auto">
            <div class="col-md-12">

<article id="post-6116" class="post-6116 page type-page status-publish hentry entry">
        <header class="clearfix">

<h1 class="text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Placed Student list</h1>
    </header>

    <div class="clearfix">

<div class="single-box">
<div class="clearfix">
<div class="heading-text">
<h2 class="text-xl md:text-2xl font-semibold mb-10 text-[#da2028] capitalize my-4">List of Students Placed from Kazumi School</h2>
</div>
</div>
<div class="clearfix">
<p>With the growing number of graduates and the insufficient demand in IT field, candidates now need to learn techniques and usage of upcoming technologies that are utilized by these MNC’s. Candidates need to get not only the technical knowledge but also must be able to work practically with these tools. We help our students achieve just that. We have a variety of courses that are currently revolutionizing the technology field and train the students keeping in mind the demands of a work environment.</p>
</div>
<div class="clearfix">
<div class="heading-text">
<h2>Training and Placement</h2>
</div>
</div>
<div class="clearfix">
<p>At Kazumi School, we have trainers that are experts in the corresponding field. Our trainers are majorly professionals who have worked or is still working in a well-reputed MNC’s for a brief period. They have also worked with live projects, hence have the best understanding, and can aid the students get the most practical knowledge. We have placement officer that makes sure that all of candidates are placed in their desired companies. We send our students to interviews until all of them are placed. Contact Kazumi School for more information and to get a free class of the required course to help decide better.</p>
</div>
</div>
<div class="single-box">
<div class="clearfix">
<div class="heading-text">
<h2>Placed Students </h2>
</div>
</div>
<div class="clearfix row">
<div class="col-12 col-md-4">
<div class="header_wrap">
<div class="num_rows" style="width: 120px;">
</div>
</div>
</div>
<div class="col-12 col-md-8">
<div class="pagination-container pull-right">&nbsp;</div>
</div>
</div>
<div class="table-responsive">
    <form action="" method="GET">
        <div class="flex my-6 max-w-6xl flex items-center gap-4">
            <div class="w-full">
              <select name="course_id[]" id="course-select" class="w-2xl p-2" multiple>
               <option value="select_filtered">Select All</option>
                    @foreach($groupCourse as $c)
                        <option value="{{ $c->course }}" 
                            {{ collect(request()->get('course_id'))->contains($c->course) ? 'selected' : '' }}>
                            {{ $c->course }}
                        </option>
                    @endforeach
                </select>
               </div>
            <div class="col-md-1 mt-1">
                <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm">
            </div>
            <div class="col-md-1 mt-1">
                <a href="/placed-students-list" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm">Reset</a>
            </div>
        </div>
    </form>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Designation</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
<?php $i = 0;?>
@if($placedstudent)
@foreach($placedstudent as $ps)
            <tr>
                <td>{{$ps->name}}</td>
                <td>{{$ps->company}}</td>
                <td>{{$ps->designation}}</td>
                <td>{{$ps->course}}</td>
            </tr>
@endforeach
@endif
        </tbody>
    </table>
</div>

</div>



    </div><!-- .entry-content -->

    </article><!-- #post-6116 -->

            </div>
        </div>
<!-- <script>
    $('#example').dataTable({
    "bProcessing": false,
    "pageLength": 1000,
    // "sAutoWidth": false,
    // "bDestroy":true,
     "sPagination":true,
     // "iDisplayStart ": 50,
     // "iDisplayLength": 50,
     "bPaginate": true, //hide pagination
     "bFilter": false,
     "bInfo": false, // hide showing entries
     "lengthMenu": [[50, 150, 500, 1000, -1], [50, 150, 500, 1000, "All"]]
})
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Select2 JS CDN -->

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

<script>
$(document).ready(function() {
    let matchFound = false;

    // Initialize Select2
    $('#course-select').select2({
        placeholder: "Select a course",
        allowClear: true,
        closeOnSelect: false, // Dropdown open rahe
        matcher: function(params, data) {
            if ($.trim(params.term) === '') {
                matchFound = false;
                return data;
            }
            if (data.id === 'select_filtered') {
                return matchFound ? data : null;
            }
            let match = $.fn.select2.defaults.defaults.matcher(params, data);
            if (match) matchFound = true;
            return match;
        },
        templateResult: function(data) {
            if (data.id === 'select_filtered') {
                return $('<strong>Select All</strong>');
            }
            return data.text;
        }
    });

    // Handle "Select All" toggle
    $('#course-select').on('select2:select', function(e) {
        if (e.params.data.id === 'select_filtered') {
            var visibleOptions = $('.select2-results__option--selectable:visible')
                .not('[aria-label="Select Filtered"]');

            var visibleValues = visibleOptions.map(function() {
                return $(this).attr('data-select2-id').split('-').pop();
            }).get();

            var currentSelected = $(this).val() || [];

            // Check if ALL visible are already selected
            var allSelected = visibleValues.every(val => currentSelected.includes(val));

            var newSelected;
            if (allSelected) {
                // Deselect all visible
                newSelected = currentSelected.filter(val => !visibleValues.includes(val));
            } else {
                // Select all visible
                newSelected = [...new Set([...currentSelected, ...visibleValues])];
            }

            // Update selection
            $(this).val(newSelected).trigger('change.select2');

            // Remove "Select All" from actual selection
            var vals = $('#course-select').val() || [];
            $('#course-select').val(vals.filter(v => v !== 'select_filtered')).trigger('change.select2');

            $('.select2-search__field').val('').trigger('change.select2');
        }
    });
});
</script>

@endsection