let MaxConsecutive = (n) => {
    let max = 0;
    let count = 0;
    for (let i in n) {
        count = n[i] === 1 ? count + 1 : 0;
        if (count > max) {
            max = count;
        }
    }
    return max;
};

let n = [1,0,1,1];
MaxConsecutive(n);