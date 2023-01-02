import { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";


export default function EditBrief() {
    const [editForm, setForm] = useState({});
    let param = useParams();


    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/briefs/"+ param.id).then((res) => {
            console.log(res.data);
            setForm(res.data)
        })
    }, [])

    const handleChange = (e) => {
        let name = e.target.name;
        let value = e.target.value;

        setForm ((old)=> {return {...old, [name]:value}} )

    }

    const submitBrief = (e) => {
        e.preventDefault();
        axios.put("http://127.0.0.1:8000/api/briefs/" + param.id, editForm).then( () => {
            alert("updated");
        })
    }


    return (
        <form onSubmit={submitBrief}>
            <input type="text" name="name" onChange={handleChange} value={editForm.name} />
            <input type="text" name="description" onChange={handleChange} value={editForm.description}/>
            <input type="text" name="duree" onChange={handleChange} value={editForm.duree}/>
            <input type="submit" name="submit" />
        </form>
    )
}