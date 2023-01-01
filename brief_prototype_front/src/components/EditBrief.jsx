import { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";

export default function EditBrief() {
    const [editForm, setForm] = useState({});
    let param = useParams();

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/briefs"+ param.id).then((res) => {
            console.log(res.data);
            setForm(res.data)
        })
    }, [])
    return (
        <form >
            <input type="text" name="title" value={editForm.name} />
            <input type="text" name="description"   />
            <input type="number" name="duration" />
            <input type="submit" name="submit" />
        </form>
    )
}