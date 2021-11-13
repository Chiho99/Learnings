// このファイルに解答を書いてください。
// 問題文はindex.htmlにあります。


// Q 1
let hello_world = document.getElementById('q1-text');
console.log(hello_world.textContent);

// Q 2
let text = document.getElementById('q2-text');
text = "変更成功";
console.log(text);

// Q 3
let text_color = document.getElementById('q3-text');
text_color.style.color = 'red';

// Q 4 (難)
// 「for of」を使います。
let colors = document.querySelectorAll('.q4-text');
for(color of colors){
    color.style.color = 'blue';
};

// Q 5
let bg_colors = document.querySelectorAll('.q5-text');
for(bg_color of bg_colors){
    bg_color.style.background = 'grey';
};

// Q 6
let click_me = document.getElementById('q6-text');
// console.log(click_me);
click_me.addEventListener('click', function(){
    click_me.style.color = 'purple';
});

// Q7
let mouse_over = document.getElementById('q7-text');
// console.log(mouse_over);
mouse_over.addEventListener('mouseover', function(event){
    mouse_over.style.color = 'white';
    mouse_over.style.background = 'green';
}, false);

// Q 8
mouse_leave = document.getElementById('q8-text');
// console.log(mouse_leave);
mouse_leave.addEventListener('mouseover', function(event){
    mouse_leave.style.background = 'green';
}, false);
mouse_leave.addEventListener('mouseleave', function(event){
    mouse_leave.style.background = 'white';
}, false);

// Q 9
let name_get = document.getElementById('q9-input');
let btn_9 = document.getElementById('q9-btn');
let result_9 = document.getElementById('q9-result');

btn_9.addEventListener('click', function(){
   result_9.textContent = name_get.value;
})

// Q 10
let age_get = document.getElementById('q10-input');
let btn_10 = document.querySelector('.q10-btn');
let result_10 = document.getElementById('q10-result');

btn_10.addEventListener('click', function(){
    if(age_get.value < 20){
        result_10.textContent = '20歳未満の方の利用は禁止です';
    }else{
        result_10.textContent = age_get.value + '歳';
    }
});

// Q 11
let name_input = document.getElementById('q11-input-name');
let age_input = document.getElementById('q11-input-age');
let btn_11 = document.querySelector('.q11-btn');
let result_name = document.getElementById('q11-result-name');
let result_age = document.getElementById('q11-result-age');
btn_11.addEventListener('click', function(){
    if(age_input.value < 20){
        result_age.style.color = "red";
        result_age.textContent = '20歳未満の方の利用は禁止です。';
    }else{
        result_age.style.color = '';
        result_age.textContent = age_input.value + '歳';
    };
    if(name_input.value == ''){
        result_name.style.color = "red";
        result_name.textContent = '名前が空欄です';
    }else{
        result_name.style.color = '';
        result_name.textContent = name_input.value;
    }
});

// Q 12
let btn_12 = document.querySelector('.q12-btn');
let result_12 = document.querySelector('.q12-result');
console.log(btn_12);
console.log(result_12);
btn_12.addEventListener('click', function(){
    let btn_text = document.createElement('p');
    btn_text.textContent = btn_12.textContent; 
    result_12.textContent = btn_text.textContent;
    console.log(btn_text);
});


// Q 13
let parent = document.getElementById('q13-box')
// console.log(parent);
let btn_13 = document.querySelector('.q13-btn');
btn_13.addEventListener('click', function(){
    let list = document.createElement('li');
    parent.appendChild(list);
    parent.insertBefore(list, parent.children[0]);
    console.log(parent[0]);
    list.textContent = 'リンゴ';
    
})


// Q 14
let chicken = document.querySelector('#chicken');
let btn_14 = document.querySelector('.q14-btn');
btn_14.addEventListener('click', function(){
    chicken.remove();
})

// Q 15 (難)
// switchまたはifを使います。
// 要素.href = 'https://google.com';
// でリンク先を追加できます。
let btn_15s = document.querySelectorAll('.q15-btn');
let link = document.querySelector('.q15-link-list');
for (btn_15 of btn_15s){
    let link_tag = document.createElement('a');
    let sort = btn_15.textContent;
        if(sort === "Google"){
            btn_15.addEventListener('click', function(){
                link_tag.href = "https://google.com";
                link.textContent = link_tag.href;
            }); 
        }else if(sort === "YouTube"){
            btn_15.addEventListener('click', function(){
                link_tag.href = "https://youtube.com";
                link.textContent = link_tag.href;
            });
        }else if(sort === "Amazon"){
            btn_15.addEventListener('click', function(){
                link_tag.href = "https://amazon.com";
                link.textContent = link_tag.href;
            });
        }
    // console.log(link_tag);
}