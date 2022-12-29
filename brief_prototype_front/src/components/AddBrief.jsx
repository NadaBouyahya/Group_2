import axios from "axios";
import { useState } from "react"

export default function AddBriefs() {
    const [form, setForm] = useState({});
    
    const handleChange = (e) => {
        let name = e.target.name;
        let value = e.target.value;
        setForm((old)=>{return {...old, [name]: value}});
    }

    const Submit = (e) => {
        e.preventDefault();
        axios.post('http://127.0.0.1:8000/api/briefs', form).then(()=>{
            alert("added");
        })
    }

    return (
        <form onSubmit={Submit}>
            <input type="text" name="title" onChange={handleChange} value={form.title} />
            <input type="text" name="description" onChange={handleChange} value={form.description} />
            <input type="number" name="duration" onChange={handleChange} value={form.duration} />
            <input type="submit" name="submit"/>
        </form>
    )
}

// an3adlo markup
// xmn tari9a li n5dmo biha
// 