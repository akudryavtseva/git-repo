function loadPosts() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET','gallery.json');
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                var answer = JSON.parse(xhr.responseText);
                showGallery(answer);    
            }
        }
    }
}

function showGallery(galery) {
    galery.forEach(function (item) {
  
      var container = document.createElement('div');
      var title = document.createElement('p');
      title.textContent = item.title;
  
      var bigPicture = document.createElement('a');
      bigPicture.href = item.big;
  
      var thumbPicture = document.createElement('img');
      thumbPicture.src = item.thumb;
         
      bigPicture.appendChild(thumbPicture);
      container.appendChild(title);
      container.appendChild(bigPicture);
  
      document.body.appendChild(container);
    });
  }

window.onload = function() {
    loadPosts();
}