function ajax(attr){
  var container = document.querySelector('.container');
  var http = new XMLHttpRequest();
  http.open("GET","page.php?name="+attr,true);
  http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  http.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data = this.response;
      container.innerHTML = data;
    }
  }
  http.send();
}
