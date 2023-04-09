<?php
// Define an array of quotes
$quotes = array(
    "Be the change you wish to see in the world. -Mahatma Gandhi",
    "The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela",
    "It does not matter how slowly you go as long as you do not stop. -Confucius",
    "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough. -Oprah Winfrey",
    "Believe you can and you're halfway there. -Theodore Roosevelt"
    "The only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. -Steve Jobs"
    "You miss 100% of the shots you don't take. -Wayne Gretzky"
    "Be the change that you wish to see in the world. -Mahatma Gandhi"
    "Success is not final, failure is not fatal: it is the courage to continue that counts. -Winston Churchill"
    "I can't change the direction of the wind, but I can adjust my sails to always reach my destination. -Jimmy Dean"
    "The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt"
    "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle. -Christian D. Larson"
    "Happiness is not something ready made. It comes from your own actions. -Dalai Lama"
    "The only limit to our realization of tomorrow will be our doubts of today. -Franklin D. Roosevelt"
    "Do not go where the path may lead, go instead where there is no path and leave a trail. -Ralph Waldo Emerson"
    "The best way to predict the future is to create it. -Peter Drucker"
    "Life is 10% what happens to us and 90% how we react to it. -Charles R. Swindoll"
    "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. -Albert Schweitzer"
    "The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela"
    "The journey of a thousand miles begins with one step. -Lao Tzu"
    "In three words I can sum up everything I've learned about life: it goes on. -Robert Frost"
    "I have not failed. I've just found 10,000 ways that won't work. -Thomas A. Edison"
    "Your time is limited, don't waste it living someone else's life. -Steve Jobs"
    "The only way to have a good life is to stop worrying about it and start living it. -Anonymous"
    "If you want to live a happy life, tie it to a goal, not to people or things. -Albert Einstein"
);

// Get a random quote from the array
$random_quote = $quotes[array_rand($quotes)];

// Display the quote
echo $random_quote;
?>
