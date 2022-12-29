import { useBriefState } from "../states/BriefState";
import axios from 'axios';
import { useEffect } from "react";
import {
    BrowserRouter as Router,
    Routes,
    Route,
    Link
} from 'react-router-dom';


export default function Briefs() {
    const briefs = useBriefState();

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/briefs").then((res) => {
            // console.log(res.data);
            briefs.set(res.data)
        })
    }, [])



    return (
        <>
            <Link to={"/AddBriefs"}>ajouter un brief</Link>
            <table>
                <thead>
                    <th>titre</th>
                    <th>description</th>
                    <th>durée</th>
                </thead>

                <tbody>
                    {briefs.get().map((item) => (
                        <tr>
                            <td>{item.title}</td>
                            <td>{item.description}</td>
                            <td>{item.duration} jours</td>
                        </tr>
                    )
                    )}

                </tbody>
            </table>
        </>
    )

}