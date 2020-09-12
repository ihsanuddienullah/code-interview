const reverseString = (s) => {
    let left=0;
    let right= s.length-1;
    while (left < right) {
        let tmp = s[left];
        s[left++] = s[right];
        s[right--] = tmp;
    }
    return s;
};

let s = ["h","e","l","l","o"]
console.log(reverseString(s));