function loadPosts() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET','result.json');
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                var answer = JSON.parse(xhr.responseText);
                console.log(answer.result);
                var button = document.getElementById('load');
                if (answer.result === 'error') {
                    button.style.backgroundColor='red';
                } else if (answer.result === 'success') {
                    button.style.backgroundColor='green';
                } else {
                    button.style.backgroundColor='yellow';
                }   
            }
        }
    }
}

window.onload = function() {
    document.getElementById('load').addEventListener('click', function(event) {
        loadPosts();
        event.preventDefault();
    });   
}