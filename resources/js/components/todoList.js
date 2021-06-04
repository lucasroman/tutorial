import React from 'react';
import ReactDOM from 'react-dom';

class TodoApp extends React.Component {
    constructor(props) {
        super(props);
        this.state = { items: [], text: '' };
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    render() {
        return (
            <div>
                <h2>Tasks TODO</h2>
                <TodoList items={this.state.items} />
                <form onSubmit={this.handleSubmit}>
                    <div className="form-group row align-items-center">
                        <div className="col-md-auto mt-3">
                            <label htmlFor="new-todo">
                                <h4>What need to be done?</h4>
                            </label>
                        </div>
                        <div className="col-md-auto">
                            <input
                                id="new-todo"
                                onChange={this.handleChange}
                                value={this.state.text}
                                name="input-field"
                            />
                        </div>
                        <div className="col-md-auto">
                            <button className="btn btn-dark">
                                Add #{this.state.items.length + 1}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        );
    }

    handleChange(e) {
        this.setState({ text: e.target.value });
    }

    handleSubmit(e) {
        e.preventDefault();
        if (this.state.text.length === 0) {
            return;
        }
        const newItem = {
            text: this.state.text,
            id: Date.now()
        };
        this.setState(state => ({
            items: state.items.concat(newItem),
            text: ''
        }));
    }
}

class TodoList extends React.Component {
    render() {
        return (
            <ul className="list-group my-3">
                {this.props.items.map(item => (
                    <li className="list-group-item" key={item.id}>{item.text}</li>
                ))}
            </ul>
        );
    }
}

if (document.getElementById('todoList')) {
    ReactDOM.render(
        <TodoApp />,
        document.getElementById('todoList')
    );
}
