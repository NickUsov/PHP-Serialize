window.onload = function() {
  this.document.querySelector("#user_text").addEventListener("input", () => {
    if (document.querySelector("#user_text").value !== "") {
      let ao = new this.XMLHttpRequest();
      let name = this.document.querySelector("#user_text").value;
      ao.open("GET", "handler.php?name=" + name, true);
      ao.onreadystatechange = function() {
        if (ao.readyState === 4 && ao.status === 200) {
          document.querySelector("#result").innerHTML = ao.responseText;
        }
      };
      ao.send(null);
    } else {
      document.querySelector("#result").innerHTML = "";
    }
  });
};
