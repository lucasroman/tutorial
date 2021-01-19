// Example for check that js are loeaded correctly, delete this file.
var greeting = document.getElementById('reactScript').getAttribute('greeting');

function tick() {
    const element = (
        <div>
            <h1>Hello, world</h1>
            <h2>It is {new Date().toLocaleTimeString()}.</h2>
            <h3>{greeting}</h3>
        </div>
    );
    ReactDOM.render(element, document.getElementById('root'));
}

setInterval(tick, 1000);
