<div class="col-md-3 mt-5">
   <!-- Search Widget -->
<!-- <h4 class="widget-title mb-5">Don't <span>Miss</span></h4> -->

   <div class="card mb-4 border-0">
      <h5 class="card-header border-0 bg-white">Search</h5>
      <div class="card-body">
         <form name="search" action="search.php" method="post">
         <ul class="nav navbar-nav" style="width: 100%; margin-top: 0px; color: #211C6A;">
    <marquee id="postTitleMarquee" behavior="scroll" direction="left" onmouseover="stopMarquee()" onmouseout="startMarquee()" scrollamount="3" scrolldelay="30">
        <b>New Announcement!</b>
        <img src="images/mege.png" alt="" style="margin-right: 10px; width: 20px; height: 20px;">
        <span id="postTitle"></span>
    </marquee>
</ul>

            <div class="input-group">
               
               <input type="text" name="searchtitle" class="form-control rounded-0" placeholder="Search for..." required>
               <span class="input-group-btn">
               <button class="btn btn-secondary rounded-0" type="submit"><i class="fa fa-search"></i></button>
               </span>
         </form>
         </div>
      </div>
   </div>
   
   <!-- Side Widget -->       
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Recent Announcement</h5>
      <div class="card-body">
         <ul class="mb-0 list-unstyled">
            <?php
               $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
               while ($row=mysqli_fetch_array($query)) {
               
               ?>
            <li class="d-flex mb-2 align-items-center">
               <img class="mr-2 rounded-circle" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="50px" height="50px">
               <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($row['posttitle']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Popular  Announcement</h5>
      <div class="card-body">
         <ul class="list-unstyled">
            <?php
               $query1=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId  order by viewCounter desc limit 5");
               while ($result=mysqli_fetch_array($query1)) {
               
               ?>
            <li class="mb-2">
               <a href="news-details.php?nid=<?php echo htmlentities($result['pid'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($result['posttitle']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Top Announcement</h5>
      <div class="card-body">
         <ul class="mb-0 list-unstyled">
            <?php
               $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
               while ($row=mysqli_fetch_array($query)) {
               
               ?>
            <li class="d-flex mb-2 align-items-center">
               <img class="mr-2 rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="50px" height="50px">
               <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($row['posttitle']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   
