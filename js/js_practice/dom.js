console.log('-----get_element_01-----');
let blue = document.getElementById('blue');
console.log(blue);

let green = document.getElementsByClassName('green');
console.log(green);

let li = document.getElementsByTagName('li');
console.log(li);

let color = document.querySelector('#box .color');
console.log(color);

let colors = document.querySelectorAll('#box .color');
console.log(colors);

let red = document.getElementById('red');
let ul = red.parentElement;
console.log(ul);

let box = document.getElementById('box');
let lists = box.children;
console.log(lists);

console.log('-----edit_element_02-----');
let blueEl = document.getElementById('blue');
let text = blueEl.textContent;
blueEl.textContent = '青';
console.log(blueEl);
blueEl.style.color = 'blue';
console.log(blueEl);
blueEl.classList.add('blue');
console.log(blueEl);
blueEl.classList.remove('red');
console.log(blueEl);

let inputText = document.querySelector('#iput-text');
// input.value = "test";
console.log(inputText);

console.log('-----add_event_03-----');
let string = document.querySelector('#text');
string.addEventListener('mouseover', function(){
    this.style.color = 'pink';
    this.style.fontSize = '20px';
});

string.addEventListener('mouseleave', function(){
    this.style.color = '';
});

let input = document.querySelector('#input-text');
input.addEventListener('change', function(){
    console.log(this.value);
    alert('入力欄が変更されました');
});

let btn = document.querySelector('click', function(){
    string.textContent = input.value;
});

console.log('-----add_element_04-----');
let michiko = document.querySelector('#parent');
console.log(michiko);

// 要素の作成・追加
let akemi = document.createElement('div');
akemi.textContent = 'あけみ';
console.log(akemi);

let masato = document.createElement('div');
masato.textContent = 'まさと';
console.log(masato);

let atsushi = document.createElement('div');
atsushi.textContent = 'あつし';
atsushi.id = 'atsushi';
atsushi.style.color = 'blue';
atsushi.classList.add('nexseed');
console.log(atsushi);

michiko.appendChild(akemi);
michiko.appendChild(masato);
michiko.insertBefore(atsushi, masato);