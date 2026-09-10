function calculateGrade(score) {
    score = Number(score);
    if (Number.isNaN(score)) {
        console.error("Invalid score:", score);
        return null;
    }

    let grade;
    } if (score >= 80) {
        grade = "A";
    } else if (score >= 75) {
        grade = "B";
    } else if (score >= 70) {
        grade = "C+";
    } else if (score >= 65) {
        grade = "C";
    } else if (score >= 60) {
        grade = "D+";
    } else if (score >= 55) {
        grade = "D";
    } else {
        grade = "E";
    }

    console.log("Grade:", grade);
    return grade;

function printName() {
    let name = "Nalinee";
    console.log("Name:", name);
    document.write("<br>Your name is: " + name + "!");
}

function printName(name) {
    console.log("Name:", name);
    document.write("<br>Your name is: " + name + "<br>");
}

function totalPrice(price, quantity) {
    let total = price * quantity;
    return total;
}

function totalPriceWithTax(price, quantity, taxRate) {
    let total = totalPrice(price, quantity);
    let totalWithTax = total + (total * taxRate);
    console.log("Total Price:", total, "Total with Tax:", totalWithTax);
    return totalWithTax;
}

