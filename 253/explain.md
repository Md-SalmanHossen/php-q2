Ei math formula-gulo specific ekta pattern-er problem solver: **"Resource Allocation with Surplus/Waste Calculation"** (সম্পদ বণ্টন এবং অপচয় হিসাব)।

UIU Web Programming exam-e jokhon-i emon kono scenario ashbe jekhane **kono kichu purno purno (whole/discrete units) kinte ba book korte hoy** ebong emon faka/baki thaka jinisheer karone taka kskoti/wasted hoy, tokhon-i ei formula pattern-ta 100% same thakbe.

---

### Formula Breakdown & Application Rules

#### 1. `$total_units = ceil($total_items / $capacity_per_unit);`

* **Kokhno use korbe:** Jokhon bola thakbe fraction/bangsha kinte parbe na, purno unit kinte hobe (e.g., fractional pizza, partial venue, partial screen book kora jabena).


* **Real Scenarios (UIU Exam Questions):**
* **Venue / Hall Booking:** $250$ জন মানুষের জন্য $80$ সিটের ভেন্যু কতটি লাগবে? $\rightarrow \text{ceil}(250 / 80) = 4$ টি ভেন্যু।


* **Pizza Ordering:** $10$ জন ছাত্র $3$ টি করে স্লাইস খাবে ($30$ স্লাইস)। ১টা পিজ্জায় $8$ স্লাইস থাকলে কয়টি পিজ্জা লাগবে? $\rightarrow \text{ceil}(30 / 8) = 4$ টি পিজ্জা।


* **Movie Cinema Screen Booking:** $150$ জন দর্শকের জন্য $60$ সিটের কয়টি স্ক্রিন লাগবে? $\rightarrow \text{ceil}(150 / 60) = 3$ টি স্ক্রিন।


* **Bus / Transport Renting:** $105$ জন স্টুডেন্টের জন্য $40$ সিটের কয়টি বাস লাগবে? $\rightarrow \text{ceil}(105 / 40) = 3$ টি বাস।



---

#### 2. `$total_capacity = $total_units * $capacity_per_unit;`

* **Kokhno use korbe:** Buk kora ba kena mot unit-er sompurno khomota/capacitiy ber korar jonno.
* **Real Scenarios:**
* ৪টি ভেন্যুর মোট আসন সংখ্যা = $4 \times 80 = 320$।


* ৪টি পিজ্জার মোট স্লাইস সংখ্যা = $4 \times 8 = 32$।


* ৩টি স্ক্রিনের মোট সিট সংখ্যা = $3 \times 60 = 180$।





---

#### 3. `$leftover_or_empty = $total_capacity - $total_items;`

* **Kokhno use korbe:** Manusher dabi puron korar por ar koiti seat/slice faka ba leftover ache ta ber korte.
* **Real Scenarios:**
* **Empty Seats:** $320 - 250 = 70$ টি ফাঁকা সিট।


* **Leftover Slices:** $32 - 30 = 2$ টি অবশিষ্ট স্লাইস।


* **Empty Cinema Seats:** $180 - 150 = 30$ টি ফাঁকা সিট।





---

#### 4. `$wasted_money = $leftover_or_empty * $price_per_unit_item;`

* **Kokhno use korbe:** Faka ba opocoy howa per unit-er jonno mot koto taka nosto holo ta ber korte.
* **Real Scenarios:**
* **Empty Seat Loss:** $70 \text{ empty seats} \times 70 \text{ BDT/person} = 8,400$ BDT।


* **Leftover Pizza Loss:** $2 \text{ leftover slices} \times \left(\frac{1050}{8}\right) \text{ BDT/slice} = 262.5$ BDT।


* **Empty Cinema Seat Loss:** $30 \text{ empty seats} \times 500 \text{ BDT/ticket} = 15,000$ BDT।





---

### Summary Checklist for Exam:

Jokhon-i kono proshne ei 3-ti kotha dekhbe:

1. **"Minimum complete/whole units needed"** (আংশিক কেনা যাবে না)


2. **"Leftover / Empty seats remaining"** (কয়টি অবশিষ্ট রইল)


3. **"Money wasted on empty seats/leftovers"** (অপচয় হওয়া টাকা)



চোখ বন্ধ করে এই ৪ লাইনের লজিক ব্যবহার করবে!