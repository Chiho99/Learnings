console.log('-----01_basic-----');
console.log('-----1.-----');
console.log('Hello World');

console.log('-----2.-----');
let name = 'Seedkun';
console.log(`変数nameの中身:${name}`);

console.log('-----3.-----');
let lastName = 'yamada';
let firstName = 'hanako';
console.log(lastName+firstName);

console.log('-----4.-----');
let a = 10;
let b = 2;
console.log(a + b);

console.log('-----5.-----');
console.log(a - b);
console.log('-----6.-----');
console.log(a * b);
console.log('-----7.-----');
console.log(a / b);

console.log('-----8.-----');
let c = 10;
let d = 3;
console.log(c % d);

console.log('-----9.-----');
let e = 11;
let f = 13;
let g = e * f;
console.log(g);
console.log('-----10.-----');
let x = 2;
console.log(x);
console.log(x * x);
console.log(x * x * x);

console.log('-----02_if-----');
console.log('-----11.-----');
x = 20;
let y = 10;
if(x>y){
    console.log('xはyより大きい。');
}

console.log('-----12.-----');
x = 15;
y = 30;
if(x >= y){
    console.log('xはy以上');
}else{
    console.log('xはyより小さい');
}

console.log('-----13.-----');
x = 12;
y = 15;
if(x > y){
    console.log('xはyより大きい');
}else if(x < y){
    console.log('xはyより小さい');
}else{
    console.log('xとyは等しい');
}

console.log('-----14.-----');
x = 2;
if(x % 2 == 0){
    console.log('偶数です');
}else{
    console.log('奇数です');
}

console.log('-----15.-----');
x = 25;
if(x % 3 == 0){
    console.log(`${x}は3の倍数です。`);
}else if(x % 5 == 0){
    console.log(`${x}は5の倍数です。`);
}else{
    console.log(`${x}は3と5の倍数以外です`);
}

console.log('-----16.-----');
x = 20;
if(x >= 10 && x <= 20){
    console.log(`${x}は10以上かつ20以下です`);
}

console.log('-----17.-----');
x = 12;
if(x >= 100 || x <= 10){
    console.log(`${x}は100以上または10以下です`);
}

console.log('-----18.-----');
x = 'セブアノ語';
if(x === '日本語'){
    console.log('ありがとう');
}else if(x === '英語'){
    console.log('thank you');
}else if(x === 'セブアノ語'){
    console.log('salamat');
}else{
    console.log('わかりません');
}

console.log('-----19.-----');
x = '男';
switch(x){
    case '男':
        console.log('male');
        break;
    case '女':
        console.log('female');
    default:
        console.log('性別不詳');
}

console.log('-----20.-----');
x = 9;
switch(x){
    case 1:
        console.log('January');
        break;
    case 2:
        console.log('February');
        break;
    case 3:
        console.log('March');
        break;
    case 4:
        console.log('April');
        break;
    case 5:
        console.log('May');
        break;
    case 6:
        console.log('June');
        break;
    case 7:
        console.log('July');
        break;
    case 8:
        console.log('August');
        break;
    case 9:
        console.log('September');
        break;
    case 10:
        console.log('October');
        break;
    case 11:
        console.log('November');
        break;
    case 12:
        console.log('December');
        break;
    default:
        console.log('月が存在しません');
        break;
}

console.log('-----03_loop-----');
console.log('-----21.-----');
for(let i = 1; i <= 10; i++){
    console.log('hoge');

}

console.log('-----22.-----');
for (i = 1; i <= 10; i++ ){
    console.log(i);
}

console.log('-----23.-----');
for (i = 1; i < 10; i++ ){
    console.log(2*i);
}

console.log('-----24.-----');
for(i = 1; i <= 100; i++){
    if(i % 2 == 0){
        console.log(i);
    }
}
console.log('-----25.-----');
for (i = 1; i <= 100; i++){
    if(i % 2 !== 0){
        console.log(i);
    }
}

console.log('-----26.-----');
for(i = 1; i <= 100; i++){
    if(i % 3 == 0){
        console.log(i);
    }
}

console.log('-----27.-----');
for(i = 1; i <= 100; i++){
    if(i % 5 == 0){
        console.log(i);
    }
}

console.log('-----28.-----');
for(i = 1; i <= 100; i++){
    if(i % 15 == 0){
        console.log(i);
    }
}

console.log('-----29.-----');
for(i = 1; i <= 100; i++){
    if(i % 3 == 0){
        console.log('Fizz');
    }else{
        console.log(i);
    }
}

console.log('-----30.-----');
for(i = 1; i <= 100; i++){
    if(i % 15 == 0){
        console.log('FizzBuzz');
    }else if(i % 3 == 0){ 
        console.log('Fizz');
    }else if(i % 5 == 0){
        console.log('buzz');
    }else{
        console.log(i);
    }
}

console.log('-----array_04-----');
console.log('-----31.-----');
const array_number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

console.log('-----32.-----');
const array = ['A', 'B', 'C', 'D', 'E'];

console.log('-----33.-----');
const animals = ['dog', 'fox', 'monkey'];

console.log('-----34.-----');
animals.push('elephant');
console.log(animals);

console.log('-----35.-----');
animals[0] = 'cat'
console.log(animals);

console.log('-----36.-----');
animals.splice(1,1);
console.log(animals);

console.log('-----37.-----');
for (animal of animals){
    console.log(animal);
}

console.log('-----38.-----');
for (animal of animals){
    if(animal !== 'fox'){
        console.log(animal);
    }
}
console.log('-----39.-----');
const apps = ['LINE', 'Twitter', 'Facebook', 'Instagram'];

console.log('-----40.-----');
for (app of apps){
    console.log(app);
}

console.log('-----object_05-----');
console.log('-----41.-----');
const alphabets = {
    'a':'A',
    'b':'B',
    'c':'C',
    'd':'D'
};

console.log('-----42.-----');
alphabets['e'] = 'E';


console.log('-----43.-----');
alphabets['a'] = 'AAA';

console.log('-----44.-----');
delete alphabets['b'];
console.log(alphabets);

console.log('-----45.-----');
for(let key in alphabets){
    console.log(key);
}

console.log('-----46.-----');
for(let key in alphabets){
    console.log(alphabets[key]);
}

console.log('-----47.-----');
for(let key in alphabets){
        console.log(key + ':' + alphabets[key]);
    }

console.log('-----48.-----');
for(let key in alphabets){
    if(key !== 'c'){
        console.log(key + ':' + alphabets[key]);
    }
}

console.log('-----49.-----');
for (let key in alphabets){
    if(alphabets[key] !== 'B'){
        console.log(key + ':' + alphabets[key]);
    }
}

console.log('-----50.-----');
for(let key in alphabets){
    if(key !== 'b' && alphabets[key] !== 'C'){
        console.log(key + ':' + alphabets[key]);
    }
}

console.log('-----function_06-----');
console.log('-----51.-----');
function perintHoge(){
    console.log('Hoge');
}
perintHoge();

console.log('-----52.-----');
function printNum(int){
    console.log(int);
}
printNum(2);

console.log('-----53.-----');
function printKuku(int){
    for(let i =1; i <= 10; i++){
        console.log(int*i)
    }
}
printKuku(2);

console.log('-----54.-----');
function printIsEven(int){
    if(int % 2 === 0){
        console.log('偶数です');
    }else{
        console.log('奇数です');
    }
}
printIsEven(2);

console.log('-----55.-----');
function printMessage(str, int){
    for(let i = 1; i<=int; i++){
        console.log(str);
    }
}
printMessage('FizzBuzz', 5);


console.log('-----56.-----');
function printMaxNum(int1, int2){
    if(int1 > int2){
        console.log(int1);
    }else if(int2 > int1){
        console.log(int2);
    }else{
        console.log('同じ');
    }
}
printMaxNum(5, 8);

console.log('-----57.-----');
function getSquared(int){
    return int*int;
}
let result = getSquared(5);
console.log(result);

console.log('-----58.-----');
function createSelfIntroductionText(str){
    return ('私の名前は'+ str + 'です');
}
let intro = createSelfIntroductionText('hanako');
console.log(intro);

console.log('-----59.-----');
function isEvenNumber(int){
    if(int % 2 === 0){
       return true;
    }else{
        return false;
    }
}
let evenNumber = isEvenNumber(3);
console.log(evenNumber);

console.log('-----60.-----');
function isSeedkun(str){
    if(str == 'Seedkun'){
        return true;
    }else{
        return false;
    }
}
let seedkun = isSeedkun('Seedkun');
console.log(seedkun);
