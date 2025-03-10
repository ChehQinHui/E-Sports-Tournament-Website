var postBtn = document.getElementById('postBtn');
var commentFormSection = document.getElementById('commentFormSection');


postBtn.addEventListener('click', function() {
    if (commentFormSection.style.display === 'none' || commentFormSection.style.display === '') {
        
        commentFormSection.style.display = 'block';
        postBtn.textContent = 'Hide Comment Form'; 
    } else {
       
        commentFormSection.style.display = 'none';
        postBtn.textContent = 'Post a Comment'; 
    }
});