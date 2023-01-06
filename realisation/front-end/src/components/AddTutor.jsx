import axios from "axios";
import { useState } from "react"

export default function AddTutor() {
    const [form, setForm] = useState({});
    
    const handleChange = (e) => {
        let name = e.target.name;
        let value = e.target.value;
        setForm((old)=>{return {...old, [name]: value}});
    }

    const Submit = (e) => {
        e.preventDefault();
        axios.post('http://127.0.0.1:8000/api/tutors', form).then(()=>{
            alert("added");
        })
    }

    return (
        <form onSubmit={Submit}>
            <input type="text" name="firstname" onChange={handleChange} value={form.firstname} />
            <input type="text" name="lastname" onChange={handleChange} value={form.lastname} />
            <input type="email" name="email" onChange={handleChange} value={form.email} />

            <input type="submit" name="submit"/>
        </form>
    )
}

// an3adlo markup
// xmn tari9a li n5dmo biha
// 