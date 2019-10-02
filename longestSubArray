function maxLength(a, k) {
    let maxArrLength = 0;

    for (let i = 1; i < a.length+1; i++) {
        for (let j = 0; j < a.length; j++) {
            if ((a.length - j) >= i) {
                let sum = 0;
                for (let e = j; e < j+i; e++) {
                    sum += a[e];
                }
                if (sum <= k) {
                    maxArrLength = i;
                }
            }
        }
    }
    return maxArrLength;
}
