import { useBriefState } from "../states/BriefState"

export default function AddBriefs(){
    
    const briefs = useBriefState;
   
    
   
    return (
        <>
        <form onSubmit = { (e)=> {
            e.preventDefault();
            
        } }>
            <input type="text" name="title"/> <br />
            <input type="text" name="description"/> <br />
            <input type="float" name="duration" /> <br />
            <button type="submit">save</button>
        </form>
        </>
    )
}