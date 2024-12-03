<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        button {
            padding: 80px 150px;
            font-size: 24px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background-color: #fff;
            margin: 5px 0;
            padding: 10px;
            border: 1px солид #ccc;
        }
    </style>
</head>
<body>
    <button id="clickButton">Отправить запрос</button>
    <ul id="nameList"></ul>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const button = document.getElementById('clickButton');
            const nameList = document.getElementById('nameList');

            button.addEventListener('click', () => {
                fetch('/names')
                    .then(response => {
                        console.log('Response status:', response.status);
                        if (!response.ok) {
                            throw new Error('Ошибка response');
                        }
                        return response.json();
                    })
                    .then(names => {
                        nameList.innerHTML = '';
                        names.forEach(name => {
                            const li = document.createElement('li');
                            li.textContent = name;
                            nameList.appendChild(li);
                        });
                    })
                    .catch(error => {
                        console.error('Ошибка:', error);
                        alert('Произошла ошибка при загрузке данных: ' + error.message);
                    });
            });
        });
    </script>
</body>
</html>
