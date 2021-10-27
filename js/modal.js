
/*gán giá trị rồi truyền cho input*/
function showEditModal(id,title,description,current_price,cost,discount,featureImage,category_id){ //các giá trị được truyền từ manager.php
  //Lấy các phần tử 
  var editModal = $('#editPostModal');
  var editId = $('#edit-post-id');
  var editTitle = $('#edit-post-title');
  var editDescription = $('#edit-post-description');
  var editPrice = $('#edit-post-price');
  var editCost = $('#edit-post-cost');
  var editDiscount = $('#edit-post-discount');
  var editPostImgName = $('#edit-post-img-name');
  var editFeatureImage = $('#edit-post-feature-image');
  var editUploadImg = $('#before-edit-post-img');
  var editCategoryId= $('#edit-post-category');
  editId.val(id);  //Gán giá trị cho các input
  editTitle.val(title);
  editDescription.val(description);
  editPrice.val(current_price);
  editCost.val(cost);
  editDiscount.val(discount);
  
  editFeatureImage.attr('value',featureImage);
  editPostImgName.attr('value',featureImage);
  editUploadImg.attr('src',featureImage);//Gán giá trị cho ảnh
  editCategoryId.val(category_id);
  editModal.css('background','rgba(0, 0, 0, 0.5)');
  editModal.addClass('showedit'); // thêm class showedit để hiện modal
}
function hideEditModal(){
  var editModal = $('#editPostModal');
  editModal.removeClass('showedit');/// xóaclass showedit để ẩn modal
}
function showDeleteModal(id){
  var deleteModal = $('#deletePostModal');
  var deleteId = $('#delete-post-id');
  deleteId.val(id);
  deleteModal.css('background','rgba(0, 0, 0, 0.5)');
  deleteModal.addClass('showedit');
}
function hideDeleteModal(){
  var deleteModal = $('#deletePostModal');
  deleteModal.removeClass('showedit');
}

  $(document).ready(function () {
    var addPostUpload = $('#add-post-feature-image');
    var addPostUploadImg = $('#before-add-post-img');
    addPostUpload.change(e=>{
      const file = addPostUpload[0].files[0];
      if (file) {
        addPostUploadImg.attr('src',URL.createObjectURL(file));
        addPostUploadImg.attr('alt',file.name);
      }
    })
    var editPostUpload = $('#edit-post-feature-image');
    var editPostUploadImg = $('#before-edit-post-img');
    editPostUpload.change(e=>{
      const file = editPostUpload[0].files[0];
      var editFeatureImage = $('#edit-post-feature-image');
      var editPostImgName = $('#edit-post-img-name');
      if (file) {
        editPostImgName.attr('value',file.name)
        editFeatureImage.attr('value',file.name)
        editPostUploadImg.attr('src',URL.createObjectURL(file));
        editPostUploadImg.attr('alt',file.name);
      }
    })

  });