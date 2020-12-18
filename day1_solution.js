let input = '';
let inputArray = input.split(' ');
inputArray = inputArray.map(x => x = parseInt(x))
for (let i = 0; i < inputArray.length; i++) {
    let a = inputArray[i];
    for (let j = 0; j < inputArray.length; j++) {
        let b = inputArray[j];
        for (let k = 0; k < inputArray.length; k++) {
            let c = inputArray[k];
            if ((a + b + c) == 2020){
                console.log('Result is ' + (a * b * c))
                break;
            }
        }
    }
}