async function getModels(marca) {
      let output = document.getElementById('output');

      try {
            let res = await fetch('modelos.php', {
            method: 'POST',
            headers: {
                  "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            },
            credentials: 'include',
            body: 'marca=' + marca
            });

            output.innerHTML = (await res.text());
            output.style.display = 'flex';
            
      } catch (error) {
            console.log(error);
      }
}

function closeModal() {
      document.getElementById('output').style.display = 'none';
}

function closeVideo() {
      document.getElementById('video').style.display = 'none';
}


async function getVideo(url) {
      let output = document.getElementById('video');

      let final = url.substring(17);

      try {
            let res = await fetch('link.php', {
            method: 'POST',
            headers: {
                  "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            },
            credentials: 'include',
            body: 'link=' + final
            });

            output.innerHTML = (await res.text());
            output.style.display = 'flex';
            
      } catch (error) {
            console.log(error);
      }
}