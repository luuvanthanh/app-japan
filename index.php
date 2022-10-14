<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Japan</title>
</head>
<style>
    .main {
        margin: 0 auto;
        width: 100%;
        height: 735px;
        background-image: url("./images/thuytrang.png");
        background-repeat: repeat-x;
        background-size: 50%;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .text-display {
        margin-top: 13%;
        width: 50%;
        height: 200px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        flex-direction: column;
    }

    .language {
        font-size: 2rem;
        cursor: pointer;
    }

    .text-display-vietnam {
        height: 40px;
        width: 300px;
    }

    .translate-dich {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
    }

    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5px;
    }

    .btn-dich {
        width: 200px;
        height: 50px;
        background-color: rgb(155, 182, 232);
        color: white;
        font-size: 20px;
        border: 1px solid white;
        border-radius: 25px;
        cursor: pointer;
    }
</style>

<body>
    <div class="main">
        <div class="container">
            <div class="text-display">
                <div class="text-display-japan">
                    <label class="language" id="text">Welcome to app Japanese</label>
                </div>
                <div class="text-display-vietnam">
                    <span class="translate-dich" id="display"></span>
                </div>
            </div>
        </div>
        <div class="btn">
            <button class="btn-dich" onclick="handleClick()">Display</button>
        </div>
    </div>
</body>

</html>
<script>
    const data = [{
            tuvung: 'こんにちは',
            dich: 'Xin chào'
        },
        {
            tuvung: 'あいます',
            dich: 'Gặp'
        },
        {
            tuvung: 'せんせい',
            dich: 'Giáo viên'
        },
        {
            tuvung: 'がくせい',
            dich: 'Học sinh'
        },
        {
            tuvung: 'まる',
            dich: 'Hình tròn'
        },
        {
            tuvung: 'あき',
            dich: 'Mùa thu'
        },
        {
            tuvung: 'はる',
            dich: 'Mùa xuân'
        },
        {
            tuvung: 'ふゆ',
            dich: 'Mùa đông'
        },
        {
            tuvung: 'なつ',
            dich: 'Mùa hạ'
        },
        {
            tuvung: 'えんぴつ',
            dich: 'Bút chì'
        },
        {
            tuvung: 'えいが',
            dich: 'Bộ phim'
        },
        {
            tuvung: 'こいびと',
            dich: 'Người yêu'
        },
        {
            tuvung: 'てがみ',
            dich: 'Bức thư'
        },
        {
            tuvung: 'ぶたにく',
            dich: 'Thịt lợn'
        },
        {
            tuvung: 'だいがく',
            dich: 'Đại học'
        },
    ];

    function mouseOver(language) {
        document.getElementById('display').innerText = language;
    }

    function mouseOut() {
        document.getElementById('display').innerText = '';
    }

    function handleClick() {
        let length = data.length;
        let key = Math.floor(Math.random() * length);
        document.getElementById('text').innerText = data[key].tuvung;

        document.getElementById("text").onmouseover = function() {
            mouseOver(data[key].dich)
        };
        document.getElementById("text").onmouseout = function() {
            mouseOut()
        };
    }
</script>