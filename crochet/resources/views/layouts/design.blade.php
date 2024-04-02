<style>
:root {
    --primary-color: #ffff;
    --header-color: #F9F5F6;
    --hue: 307;
    --saturation: 10%;
    --lightness: 50%;
    --lightness-adjusted: calc(var(--lightness) + 50%);
}

body {
    background-color: var(--primary-color);
}

.adjusted-element {
    background-color: hsl(var(--hue), var(--saturation), var(--lightness-adjusted));
    width: 100px;
    height: 100px;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #D0F0C0;
    height: 100px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.list {
    display: flex;
    gap: 5px;
}

.list a {
    text-decoration: none;
    background-color: #FBCFE8;
    color: #333;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    transition: background-color 0.3s ease;
    margin-right: 30px;
}

.list a:hover {
    background-color: #F8A5C2;
}

h1 {
    margin-left: 40px;
}

</style>