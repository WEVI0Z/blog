"use strict"

const pagination = document.querySelectorAll('.pagination__button a');



function getStorie(storieData) {
    return `
    <li class="storie">
        <a href="#">
            <img width="140" height="195" src="${storieData.picture}" alt="" class="storie__img">
            <p class="storie__description">${storieData.title}</p>
            <span class="storie__date">${storieData.created_at}</span>
        </a>
    </li>
    `
}

function drawPosts(storiesData) {
    const stories = [];
    const parent = document.querySelector(".stories__list");

    storiesData.forEach(storie => {
        stories.push(getStorie(storie));
    });

    parent.innerHTML = stories.join("");
}

async function throwRequest(url) {
    let response = await fetch(url);
    
    if(response.ok) {
        const storiesData = await response.json();
    
        pagination[0].href = storiesData.prev_page_url;
        pagination[1].href = storiesData.next_page_url;

        if(storiesData.prev_page_url != null) {
            pagination[0].addEventListener("click", (evt) => {
                evt.preventDefault();
                
                throwRequest(storiesData.prev_page_url);
            });
        }

        if(storiesData.next_page_url != null) {
            pagination[1].addEventListener("click", (evt) => {
                evt.preventDefault();
                
                throwRequest(storiesData.next_page_url);
            });
        }
    
        console.log(pagination[1])
    
        drawPosts(storiesData.data);
    } else {
        alert(response.status);
    }
}

throwRequest("http://blog/api/stories");