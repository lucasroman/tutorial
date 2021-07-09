import React from 'react';
import ReactDOM from 'react-dom';

class DynamicText extends React.Component {
    constructor(props) {
        super(props);
        this.state = { text: '' };
        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(e) {
        e.preventDefault();
        this.setState({ text: e.target.value });
    }

    render() {
        return (
            <div>
                <input name="input-text" onChange={this.handleChange}/>
            </div>
        );
    }
}

var textOutput = document.getElementById('dynamicText');

if (textOutput) {
    ReactDOM.render(
        <DynamicText />,
        textOutput
    );
}
